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
                googleCalendarApiKey: "{{config('services.google.calendarKey')}}",
                height: 'auto',
                timeZone: "{{config('app.timezone')}}",
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,dayGridDay,listYear'
                },
                eventSources: [{
                    googleCalendarId: "{{config('services.google.calendarHolidayId')}}",
                    color: '#fc544b',
                    textColor: '#ffffff'
                }, {
                    googleCalendarId: "{{config('services.google.calendarPresensi')}}"
                }],
                eventClick: function(info) {
                    info.jsEvent.preventDefault(); // don't let the browser navigate
                },
            });
            calendar.render();
        });

    </script>

@endpush