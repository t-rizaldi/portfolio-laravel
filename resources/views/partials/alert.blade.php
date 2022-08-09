@if (session()->has('success'))
<div id="notes" class="notify notify-notes">
    <div class="note note-success note-0">
        <span class="image"><i class="icon-sentiment_satisfied"></i></span>
        <button type="button" class="remove"><i class="icon-close"></i></button>
        
        <div class="content">
            <strong class="title">Success</strong>{{ session('success') }}
        </div>
    </div>
</div>
@endif