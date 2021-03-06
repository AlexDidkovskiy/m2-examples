<?php
declare(strict_types=1);
/**
 * CharZam_DiExample
 *
 * NOTICE OF LICENSE
 *
 * Copyright (C) 2018  Improove
 *
 * CharZam_DiExample is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * CharZam_DiExample is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with CharZam_DiExample.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @category    CharZam
 * @package     CharZam_DiExample
 * @copyright   Copyright (C) 2018 Improove (http://www.improove.se/)
 * @license     http://www.gnu.org/licenses/agpl-3.0.html
 * @author      Peter Lembke <peter.lembke@improove.se>
 */
namespace CharZam\DiExample\Model;
use CharZam\DiExample\Api\MyObjectInterface;

class MyObject1 implements MyObjectInterface
{
    protected $startValue;

    /**
     * @param int $startValue
     */
    public function __construct(
        $startValue = 1
    ) {
        $this->startValue = $startValue;
    }

    public function getStartValue($addThis = 0): int
    {
        return $this->startValue + $addThis;
    }

}