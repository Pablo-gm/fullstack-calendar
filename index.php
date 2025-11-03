<?php

include "calendar.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <link rel="stylesheet" href="/resources/css/beer.min.css" />
    <link rel="stylesheet" href="/resources/css/theme.css" />
</head>

<body class="surface-container-low">
    <header>
        <nav>
            <button class="circle transparent" onclick="toggleNav()">
                <i>menu</i>
            </button>
            <h6 class="max center-align" id="monthYear">Headline</h6>
            <button class="circle transparent">
                <i>chevron_left</i>
            </button>
            <button class="circle transparent">
                <i>chevron_right</i>
            </button>
        </nav>
    </header>
    <main>
        <div class="row top-align">
            <div>
                <nav id="main-nav" class="m l max left transparent no-padding">
                    <a>
                        <i>home</i>
                        <span>Install</span>
                    </a>
                    <a>
                        <i>widgets</i>
                        <span>Explore</span>
                    </a>
                    <div id="clock"></div>
                </nav>
            </div>
            <div class="max surface-bright square right-margin small-elevate calendar-grid" id="calendar">
                Calendar here
            </div>
        </div>
    </main>

    <!-- DIALOG -->
    <div id="dialog-wrapper">
        <div class="overlay"></div>
        <dialog class="modal" id="dialog-modal">
            <h5 id="dialog-title">Modal</h5>

            <div id="eventSelectorWrapper" style="display: none;">
                <div class="field label suffix border small">
                    <select id="eventSelector" onchange="handleEventSelection(this.value)">
                        <option disabled selected>Choose Event...</option>
                    </select>
                    <label for="eventSelector">Select Event:</label><i>arrow_drop_down</i>
                </div>
            </div>

            <!-- Event Form -->
            <form method="POST" id="eventForm">
                <input type="hidden" name="action" id="formAction" value="add">
                <input type="hidden" name="event_id" id="eventId">

                <div class="field label small border">
                    <input type="text" name="course_name" id="courseName" required placeholder=" ">
                    <label for="courseName">Course Title:</label>
                </div>
                <div class="field label small border">
                    <input type="text" name="instructor_name" id="instructorName" required placeholder=" ">
                    <label for="instructorName">Instructor Name:</label>
                </div>
                <div class="field label small border">
                    <input type="date" name="start_date" id="startDate" required placeholder=" ">
                    <label for="startDate">Start Date:</label>
                </div>
                <div class="field label small border">
                    <input type="date" name="end_date" id="endDate" required placeholder=" ">
                    <label for="endDate">End Date:</label>
                </div>
                <div class="field label small border">
                    <input type="time" name="start_time" id="startTime" required placeholder=" ">
                    <label for="startTime">Start Time:</label>
                </div>
                <div class="field label small border">
                    <input type="time" name="end_time" id="endTime" required placeholder=" ">
                    <label for="endTime">End Time:</label>
                </div>
                 <nav class="right-align no-space"><button class="transparent link" data-ui="#dialog-modal">Cancel</button><button class="" data-ui="#dialog-modal" type="submit">Save</button></nav>
            </form>

            <!-- Delete Form -->
            <form method="POST" onsubmit="return confirm('Are you sure you want to delete this appointment?')">
                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="event_id" id="deleteEventId">
                 <nav class="right-align no-space"><button class="transparent link" data-ui="#dialog-modal">Cancel</button><button class="error" data-ui="#dialog-modal" type="submit">Delete</button></nav>
            </form>

           
        </dialog>
    </div>
    <script>
        const events = <?= json_encode($eventsFromDB, JSON_UNESCAPED_UNICODE); ?>;
    </script>
    <script src="/resources/js/site.js"></script>
    <script src="/resources/js/calendar.js"></script>
</body>

</html>