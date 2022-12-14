<?php
/*
 * This file is part of shopee-php.
 *
 * (c) Jin <j@sax.vn>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NVuln\Shopee\Resources;

use GuzzleHttp\RequestOptions;
use NVuln\Shopee\Resource;

class Payment extends Resource
{
    protected $prefix = 'payment';

    /**
     * API: v2.payment.get_escrow_detail
     * Use this api to get escrow detail of order
     *
     * @param $order_sn
     * @return array|mixed|string
     */
    public function getEscrowDetail($order_sn)
    {
        return $this->call('GET', 'get_escrow_detail', [
            RequestOptions::QUERY => [
                'order_sn' => $order_sn,
            ],
        ]);
    }
}
