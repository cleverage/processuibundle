<?php

declare(strict_types=1);

namespace CleverAge\ProcessUiBundle\Admin\Field;

use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\FieldTrait;

class EnumField implements FieldInterface
{
    use FieldTrait;

    public static function new(string $propertyName, string $label = null): self
    {
        return (new self())
            ->setProperty($propertyName)
            ->setLabel($label)
            ->setTemplatePath('@CleverAgeProcessUi/admin/field/enum.html.twig');
    }
}
