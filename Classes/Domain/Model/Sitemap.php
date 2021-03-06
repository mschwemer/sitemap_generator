<?php
namespace Markussom\SitemapGenerator\Domain\Model;

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

/**
 * Class Sitemap
 */
class Sitemap
{
    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Markussom\SitemapGenerator\Domain\Model\UrlEntry>
     */
    protected $urlEntries = null;

    /**
     * Sitemap constructor.
     */
    public function __construct()
    {
        $this->urlEntries = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Markussom\SitemapGenerator\Domain\Model\UrlEntry>
     */
    public function getUrlEntries()
    {
        return $this->urlEntries;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $urlEntries
     */
    public function setEntries($urlEntries)
    {
        $this->urlEntries = $urlEntries;
    }

    /**
     * @param UrlEntry $urlEntry
     */
    public function addEntry(UrlEntry $urlEntry)
    {
        $this->urlEntries->attach($urlEntry);
    }

    public function isFilled()
    {
        if (1 <= $this->urlEntries->count()) {
            return true;
        }
        return false;
    }
}
