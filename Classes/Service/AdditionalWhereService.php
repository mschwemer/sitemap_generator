<?php
/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace Markussom\SitemapGenerator\Service;

use TYPO3\CMS\Core\Database\DatabaseConnection;

/**
 * Class AdditionalWhereService
 * @package Markussom\SitemapGenerator\Service
 */
class AdditionalWhereService
{
    /**
     * @param string $additionalWhere
     * @return string
     */
    public static function getWhereString($additionalWhere)
    {
        if (isset($additionalWhere)) {
            return ' ' . DatabaseConnection::AND_Constraint . ' ' . $additionalWhere;
        }
        return '';
    }
}
