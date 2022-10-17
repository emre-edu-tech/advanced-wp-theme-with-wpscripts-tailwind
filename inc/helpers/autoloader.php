<?php
/**
 * Customized utoloader file for the theme directory structure. Not a generic one.
 * VERY IMPORTANT NOTE: Class names and class file names should match like this:
 * filename: class-name1-name2.php, trait-name1-name2.php, ...
 * classname: Name1_Name2 (case insensitive)
 * 
 * @package LimitlessWP
 */

namespace LimitlessWP_Theme\Inc\Helpers;

/**
 * Autoloader function
 * 
 * @param string $resource Source namespace
 * 
 * @return void
 */

function autoloader($resource) {
    $resource_path = false;
    $namespace_root = 'LimitlessWP_Theme\\';
    $resource = trim($resource, '\\');

    if(empty($resource) || strpos($resource, '\\') === false || strpos($resource, $namespace_root) !== 0) {
        // Not our namespace
        return;
    }

    // Remove the root namespace from the resource
    $resource = str_replace($namespace_root, '', $resource);
    $path = explode('\\', str_replace('_', '-', strtolower($resource)));

    // Determine what type of resource path it is so that we can find the correct file path for it
    if(empty($path[0]) || empty($path[1])) {
        return;
    }

    $directory = '';
    $filename = '';

    if($path[0] === 'inc') {
        switch($path[1]) {
            case 'traits':
                $directory = 'traits';
                $filename = sprintf('trait-%s', trim(strtolower($path[2])));
                break;
            case 'widgets':
            case 'blocks':  // phpcs: ignore PSR2.ControlStructures.SwithcDeclaration.TerminatingComment
                /**
                 * If there is a class name provided for specific directory then load that.
                 * Otherwise find in inc/ directory
                 */
                if(!empty($path[2])) {
                    $directory = sprintf('classes/%s', $path[1]);
                    $filename = sprintf('class-%s', trim(strtolower($path[2])));
                    break;
                }
            default:
                $directory = 'classes';
                $filename = sprintf('class-%s', trim(strtolower($path[1])));
                break;
        }
        $resource_path = sprintf('%s/inc/%s/%s.php', LIMITLESSWP_DIR_PATH, $directory, $filename);
    }

    /**
     * meaning of return values for validate_file function (Wordpress function)
     * 0 - Nothing is wrong
     * 1 - File path contains directory traversal
     * 2 - File path contains a Windows drive path
     * 3 - File is not in the allowed files list
     */
    $is_valid_file = validate_file($resource_path);

    if(!empty($resource_path) && file_exists($resource_path) && ($is_valid_file === 0 || $is_valid_file == 2)) {
        // File exists and valid
        require_once($resource_path);
    }
}

// Register the function in parameter as __autoload implementation
spl_autoload_register('\LimitlessWP_Theme\Inc\Helpers\autoloader');