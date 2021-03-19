@extends('template.master')
@section('title', 'Calendar')
@section('judul', 'Calendar')
@section('breadcrumb')
    <div class="breadcrumb-item">
        <a href="{{ url('admin/dashboard') }}">Dashboard</a>
    </div>
    <div class="breadcrumb-item active">
        Calendar
    </div>
@endsection
@section('main')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h4>Calendar</h4>
            </div>
            <div class="card-body">
                <div class="fc-overflow">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.css">
    {{-- <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/locales-all.min.js"></script> --}}
@endpush
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                googleCalendarApiKey: 'AIzaSyDKQPeOh0AecFzchaNMIQ00dKyA8fnOU28',
                height: 'auto',
                timeZone: 'Asia/Jakarta',

                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,dayGridDay,listYear'
                },
                // events: 'id.indonesian#holiday@group.v.calendar.google.com'
                eventSources: [{
                    googleCalendarId: 'id.indonesian#holiday@group.v.calendar.google.com',
                    color: 'red', // an option!
                    textColor: 'white' // an option!
                }, {
                    googleCalendarId: 'gjfo2rjd4f59c5kgd3edgf5nfc@group.calendar.google.com'
                }],
                eventClick: function(info) {
                    info.jsEvent.preventDefault(); // don't let the browser navigate
                    
                }
                // editable: true,
            });
            calendar.render();
        });

    </script>

@endpush
