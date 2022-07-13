@php $help = AscentCreative\Help\Models\FieldHelp::forKey($key, $title); @endphp
@if($help->title && $help->text)
    <a href="{{ route('help.modal', ['key'=>$key]) }}" class="modal-link bi-question-circle-fill text-secondary"> </a>
@endif