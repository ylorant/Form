<?php
/**
 * This file is part of Berlioz framework.
 *
 * @license   https://opensource.org/licenses/MIT MIT License
 * @copyright 2017 Ronan GIRON
 * @author    Ronan GIRON <https://github.com/ElGigi>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code, to the root.
 */

namespace Berlioz\Form\Type;

use Berlioz\Form\FormValidation;

class Email extends Text
{
    const TYPE = 'email';

    /**
     * Email constructor.
     *
     * @param string $name    Name
     * @param array  $options Options
     */
    public function __construct(string $name, array $options = [])
    {
        parent::__construct($name, $options);

        // Validation
        $this->addValidation(new FormValidation([$this, 'validation']));
    }

    /**
     * Validation.
     *
     * @return bool
     */
    public function validation()
    {
        return preg_match('/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/', $this->getValue()) == 1;
    }
}