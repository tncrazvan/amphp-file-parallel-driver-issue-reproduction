<?php
use const CatPaw\Web\APPLICATION_JSON;
use CatPaw\Web\Attributes\ProducesItem;

use CatPaw\Web\Attributes\Summary;

return
#[Summary('Find one todo from the list.')]
#[ProducesItem(Todo::class, APPLICATION_JSON, new Todo)]
fn (TodoService $todos, string $id) => $todos->findOne($id);