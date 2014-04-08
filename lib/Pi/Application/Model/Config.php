<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * @link            http://code.pialog.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://pialog.org
 * @license         http://pialog.org/license.txt BSD 3-Clause License
 */

namespace Pi\Application\Model;

/**
 * Config model
 *
 * @author Taiwen Jiang <taiwenjiang@tsinghua.org.cn>
 */
class Config extends Model
{
    /**
     * {@inheritDoc}
     */
    protected $encodeColumns = array(
        'edit'  => true,
    );

    /**
     * {@inheritDoc}
     */
    protected $rowClass = 'Pi\Application\Model\RowGateway\Config';
}
