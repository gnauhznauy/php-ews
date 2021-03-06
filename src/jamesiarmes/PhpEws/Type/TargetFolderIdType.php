<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\TargetFolderIdType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Indicates the folder that is targeted for actions that use folders.
 *
 * @package php-ews\Type
 */
class TargetFolderIdType extends Type
{
    /**
     * Identifies folders that can be referenced by name.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;

    /**
     * Contains the identifier and change key of the context folder.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\FolderIdType
     */
    public $FolderId;
}
