@props(['for'])

@error($for)
    <p {{ $attributes->merge(['class' => 'text-xl text-red-600']) }}>{{ $message }}</p>
@enderror
