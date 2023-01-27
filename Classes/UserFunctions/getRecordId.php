<?php

declare(strict_types=1);

/*
 * This file is part of the package ku_semi_collapsible_accordion.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 * Sep 2022 Nanna Ellegaard, University of Copenhagen.
 */

namespace UniversityOfCopenhagen\KuSemiCollapsibleAccordion\UserFunctions;

class getRecordId
{
    /**
     * Add two items to existing ones
     *
     * @param array $params
     */
    public function getUid(&$params): void
    {
        //debug($params);
        $pid = $params['row']['pid'];
        $uid = $params['row']['uid'];
        
        $params['items'][] = ['#accordion-' . $pid . '-' . $uid, '1'];
    }
}
