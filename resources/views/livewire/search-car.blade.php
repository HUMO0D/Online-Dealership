<div>
    <h2>Cars List</h2>

    <input wire:model.live="search" placeholder="Car name">

    @if ($listCars->isEmpty())
        <p>No records found.</p>
    @else
        <ul>
            @foreach ($listCars as $record)
                <li>
                    <strong>Name:</strong> {{ $record->carname }}<br>
                    <img src="{{ asset('images/' . $record->img) }}" alt="{{ $record->carname }}">
                    <strong>Model:</strong> {{ $record->model }}<br>
                    <strong>Description:</strong> <p class="dsc">{{ $record->dsc }}</p>
                </li>
                <br><br>
            @endforeach
        </ul>
    @endif
</div>
