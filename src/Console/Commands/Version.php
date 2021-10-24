<?php

/**
 * This file is part of the Zest Framework.
 *
 * @author Muhammad Umer Farooq (Malik) <mumerfarooqlablnet01@gmail.com>
 *
 * @link https://github.com/zestframework/Zest_Framework
 *
 * @author Muhammad Umer Farooq <lablnet01@gmail.com>
 * @author-profile https://www.facebook.com/Muhammadumerfarooq01/
 *
 * For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 * @license MIT
 */

namespace Zest\Console\Commands;

use Zest\Common\Version as V;
use Zest\Console\Command;
use Zest\Console\Input;
use Zest\Console\Output;

class Version extends Command
{
    /**
     * Sign of the command.
     *
     * @since 3.0.0
     *
     * @var string
     */
    protected $sign = 'version';

    /**
     * Description of the command.
     *
     * @since 3.0.0
     *
     * @var string
     */
    protected $description = 'Get the version of Zest framework installed';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Function to handle the class.
     *
     * @param \Zest\Console\Output $output
     * @param \Zest\Console\Input  $input
     * @param array                $param
     *
     * @return void
     */
    public function handle(Output $output, Input $input, $param = []): void
    {
        $output->write('<white>Zest Framewor: </white>', false);
        $output->write('<yellow>'.V::VERSION.'</yellow>', true);
    }
}
