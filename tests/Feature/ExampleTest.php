<?php
test('the application return a successfully response', function(){
    $response = $this->get('/');
    $response->assertStatus(200);
});




