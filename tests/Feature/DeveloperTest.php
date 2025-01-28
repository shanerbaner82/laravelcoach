<?php

use App\Models\Developer;

test('developer factory creates valid developer', function () {
    $developer = Developer::factory()->create();

    expect($developer)
        ->id->toBeNumeric()
        ->name->toBeString()
        ->x_handle->toBeString()
        ->years_experience_php->toBeInt()->toBeBetween(0, 10)
        ->years_experience_other->toBeInt()->toBeBetween(0, 10)
        ->is_employed_as_dev->toBeBool()
        ->ide->toBeIn(['VS Code', 'PhpStorm', 'Sublime Text', 'Other'])
        ->willing_to_appear_on_camera->toBeBool()
        ->has_video_experience->toBeBool()
        ->interested_in_learning_laravel->toBeBool()
        ->weekly_time_available->toBeInt()->toBeBetween(1, 20)
        ->learning_goal->toBeString()
        ->php_framework_experience->toBeIn(['None', 'Laravel', 'Symfony', 'CodeIgniter'])
        ->learning_challenges->toBeString()
        ->preferred_learning_method->toBeIn(['Tutorials', 'Hands-on projects', 'Pair programming', 'Documentation'])
        ->desired_project_type->toBeString()
        ->laravel_topics->toBeIn(['Eloquent', 'Blade', 'Livewire', 'Testing', 'Authentication'])
        ->struggles->toBeString()
        ->comments->toBeString();
});

test('developer factory creates multiple developers', function () {
    $developers = Developer::factory()->count(3)->create();

    expect($developers)->toHaveCount(3);
    expect(Developer::count())->toBe(3);
});

test('developer factory attributes can be overridden', function () {
    $developer = Developer::factory()->create([
        'name' => 'John Doe',
        'x_handle' => '@johndoe',
        'ide' => 'VS Code'
    ]);

    expect($developer)
        ->name->toBe('John Doe')
        ->x_handle->toBe('@johndoe')
        ->ide->toBe('VS Code');
});

test('developer factory creates unique names', function () {
    $developers = Developer::factory()->count(10)->create();
    $uniqueNames = $developers->pluck('name')->unique();

    expect($uniqueNames)->toHaveCount(10);
});

test('developer factory creates valid x handles', function () {
    $developer = Developer::factory()->create();

    expect($developer->x_handle)->not->toContain(' ');
});

test('numeric fields are within expected ranges', function () {
    $developer = Developer::factory()->create();

    expect($developer)
        ->years_experience_php->toBeBetween(0, 10)
        ->years_experience_other->toBeBetween(0, 10)
        ->weekly_time_available->toBeBetween(1, 20);
});
