<?php declare(strict_types=1);

namespace YOOtheme\GraphQL\Language\AST;

class ObjectValueNode extends Node implements ValueNode
{
    public string $kind = NodeKind::OBJECT;

    /** @var NodeList<ObjectFieldNode> */
    public NodeList $fields;
}
