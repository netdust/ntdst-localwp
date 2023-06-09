<?php declare(strict_types=1);

namespace YOOtheme\GraphQL\Language\AST;

class BooleanValueNode extends Node implements ValueNode
{
    public string $kind = NodeKind::BOOLEAN;

    public bool $value;
}
