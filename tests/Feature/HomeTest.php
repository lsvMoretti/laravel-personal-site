<?php

it('has a home page', function () {
    $this->get(route('home'))->assertSuccessful();
});
