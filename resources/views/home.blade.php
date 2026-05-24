<x-layout :title="$title">
      <p>Welcome to my home page</p>
        <div class="flex mt-3">
        {{-- perulangan --}}
        @for ($i = 1; $i <= 10; $i++)
            {{-- pengkondisian --}}
            {{-- @if ($i % 2 !==0) --}}
                <div class="w-8 h-8 bg-blue-400 text-white p-0 me-1 text-xs grid place-items-center">{{ $i }}</div>
            {{-- @endif --}}
        @endfor
        </div>
</x-layout>