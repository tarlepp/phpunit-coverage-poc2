<?php

namespace App;

use function in_array;

class SomeClass
{
    public const COUNT_ACTION = 'countAction';
    public const CREATE_ACTION = 'createAction';
    public const DELETE_ACTION = 'deleteAction';
    public const FIND_ACTION = 'findAction';
    public const FIND_ONE_ACTION = 'findOneAction';
    public const IDS_ACTION = 'idsAction';
    public const PATCH_ACTION = 'patchAction';
    public const UPDATE_ACTION = 'updateAction';

    public function someMethodA(string $action): ?bool
    {
        if (in_array(
            $action,
            [
                SomeAnotherClass::COUNT_ACTION,
                SomeAnotherClass::FIND_ACTION,
                SomeAnotherClass::FIND_ONE_ACTION,
                SomeAnotherClass::IDS_ACTION,
            ],
            true
        )) {
            return true;
        } elseif (in_array(
            $action,
            [
                SomeAnotherClass::CREATE_ACTION,
                SomeAnotherClass::DELETE_ACTION,
                SomeAnotherClass::PATCH_ACTION,
                SomeAnotherClass::UPDATE_ACTION,
            ],
            true
        )) {
            return false;
        }

        return null;
    }

    public function someMethodB(string $action): ?bool
    {
        if (in_array(
            $action,
            [
                self::COUNT_ACTION,
                self::FIND_ACTION,
                self::FIND_ONE_ACTION,
                self::IDS_ACTION,
            ],
            true
        )) {
            return true;
        } elseif (in_array(
            $action,
            [
                self::CREATE_ACTION,
                self::DELETE_ACTION,
                self::PATCH_ACTION,
                self::UPDATE_ACTION,
            ],
            true
        )) {
            return false;
        }

        return null;
    }
}
