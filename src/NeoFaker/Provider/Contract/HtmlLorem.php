<?php

namespace NeoFaker\Provider\Contract;

interface HtmlLorem
{
    public function randomHtml(int $maxDepth = 4, int $maxWidth = 4): string;
}
