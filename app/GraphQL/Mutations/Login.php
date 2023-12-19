<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

final readonly class Login
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args): string
    {
        /** @var \App\Models\User|null $user */
        $user = User::query()
            ->where('email', $args['email'])
            ->first();

        if (! $user || ! Hash::check($args['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $user->createToken("web")->plainTextToken;
    }
}
