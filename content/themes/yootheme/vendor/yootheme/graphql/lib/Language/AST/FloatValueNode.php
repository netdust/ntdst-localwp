<?php declare(strict_types=1);

namespace YOOtheme\GraphQL\Language\AST;

class FloatValueNode extends Node implements ValueNode
{
    public string $kind = NodeKind::FLOAT;

    public string $value;
}
