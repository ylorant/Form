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

namespace Berlioz\Form\Validator\Constraint;

class BasicConstraint implements ConstraintInterface
{
    /** @var array Context */
    private $context;
    /** @var string|null Mssage */
    private $message;

    /**
     * BasicConstraint constructor.
     *
     * @param array       $context
     * @param string|null $message
     */
    public function __construct(array $context = [], ?string $message = null)
    {
        $this->context = $context;
        $this->message = $message;
    }

    /**
     * Get context.
     *
     * @return array
     */
    protected function getContext(): array
    {
        return $this->context ?? [];
    }

    /**
     * __toString() PHP magic method.
     *
     * @return string
     */
    public function __toString(): string
    {
        $message = $this->message ?? 'An error occurred.';

        foreach ($this->getContext() as $name => $value) {
            $message = str_replace(sprintf('%%%s%%', $name), $value, $message);
        }

        return $message;
    }
}