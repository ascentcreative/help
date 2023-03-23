@php $help = AscentCreative\Help\Models\FieldHelp::forKey($key, $title); @endphp
@if($help->title && $help->text)
    <a href="{{ route('help.modal', ['key'=>$key]) }}" class="modal-link @if($slot->isEmpty()) text-secondary @endif">@if($slot->isNotEmpty()){{ $slot }}@else <i class="bi-question-circle-fill"></i> @endif</a>
@endif