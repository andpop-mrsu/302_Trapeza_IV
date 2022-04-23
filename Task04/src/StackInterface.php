<?php

namespace rmvit\task04;

interface StackInterface
{
    public function push(...$elements): void;

    public function pop();

    public function top();

    public function isEmpty(): bool;

    public function copy(): Stack;

    public function __toString(): string;
}

