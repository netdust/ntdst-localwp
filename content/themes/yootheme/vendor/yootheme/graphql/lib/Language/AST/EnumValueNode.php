<?php declare(strict_types=1);

namespace YOOtheme\GraphQL\Language\AST;

class EnumValueNode extends Node implements ValueNode
{
    public string $kind = NodeKind::ENUM;

    public string $value;
}
