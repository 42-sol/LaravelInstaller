<?php

namespace RachidLaasri\LaravelInstaller\Helpers;

class PermissionsChecker
{
    /**
     * @var array
     */
    protected $results = [];

    /**
     * Set the result array permissions and errors.
     *
     * @return mixed
     */
    public function __construct()
    {
        $this->results['permissions'] = [];

        $this->results['errors'] = null;
    }

    /**
     * Check for the folders permissions.
     *
     * @param array $folders
     * @return array
     */
    public function check(array $folders)
    {
        $this->results['permissions'] = [];
        $this->results['errors'] = null;

        foreach ($folders as $folder => $permission) {
            if (! ($this->getPermission($folder) >= $permission)) {
                $this->addFileAndSetErrors($folder, $permission, false);
            } else {
                $this->addFile($folder, $permission, true);
            }
        }

        return $this->results;
    }

    public function tryFixErrors() {
        foreach ($this->results['permissions'] as $folder) {
            $isSet = $folder['isSet'];

            if (!$isSet) {
                $path = $folder['folder'];
                $permission = $folder['permission'];

                try {
                    $mode = octdec($permission);
                    $this->chmod_r(base_path($path), $mode);
                } catch (\Exception) {}
            }
        }
    }

    /**
     * Get a folder permission.
     *
     * @param $folder
     * @return string
     */
    private function getPermission($folder)
    {
        return substr(sprintf('%o', fileperms(base_path($folder))), -4);
    }

    /**
     * Add the file to the list of results.
     *
     * @param $folder
     * @param $permission
     * @param $isSet
     */
    private function addFile($folder, $permission, $isSet)
    {
        array_push($this->results['permissions'], [
            'folder' => $folder,
            'permission' => $permission,
            'isSet' => $isSet,
        ]);
    }

    /**
     * Add the file and set the errors.
     *
     * @param $folder
     * @param $permission
     * @param $isSet
     */
    private function addFileAndSetErrors($folder, $permission, $isSet)
    {
        $this->addFile($folder, $permission, $isSet);

        $this->results['errors'] = true;
    }

    /**
     * Change permissions recursively
     *
     * @param $path
     * @param $permission
     *
     * @return bool
     */
    private function chmod_r($path, $permission) {
        if (!is_dir($path)) {
            return chmod($path, $permission);
        }
        $dh = opendir($path);
        while ($file = readdir($dh)) {
            if ($file != '.' && $file != '..' ) {
                $fullpath = $path.'/'.$file;

                if(!is_dir($fullpath)) {
                    if (!chmod($fullpath, $permission)){
                        return false;
                    }
                } else {
                    if (!$this->chmod_r($fullpath, $permission)) {
                        return false;
                    }
                }
            }
        }

        closedir($dh);

        return chmod($path, $permission);
    }
}
