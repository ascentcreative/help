@php $help = AscentCreative\Help\Models\FieldHelp::forKey($key); @endphp

<x-cms-modal modalid="ajaxModal" :centered="true">

    <x-slot name="title">{{ $help->title ?? "Not Found" }}</x-slot>
  
    {!! $help->text ?? 'Help item not found' !!}

    <x-slot name="footer">
        <button class="button btn btn-primary" data-dismiss="modal">OK</button>
    </x-slot>       


</x-cms-modal>