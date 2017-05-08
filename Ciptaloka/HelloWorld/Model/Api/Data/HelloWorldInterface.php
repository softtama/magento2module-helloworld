<?php

namespace Ciptaloka\HelloWorld\Model\Api\Data;

interface HelloWorldInterface
{
    const ID = 'id';
    const LABEL = 'label';
    const VALUE = 'value';

    public function getId();
    public function setId($id);

    public function getLabel();
    public function setLabel($label);

    public function getValue();
    public function setValue($value);
}
