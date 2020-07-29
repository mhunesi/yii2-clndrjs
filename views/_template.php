<?php
/**
 * (developer comment)
 *
 * @link http://www.mustafaunesi.com.tr/
 * @copyright Copyright (c) 2020 Polimorf IO
 * @product PhpStorm.
 * @author : Mustafa Hayri ÜNEŞİ <mhunesi@gmail.com>
 * @date: 2020-07-29
 * @time: 10:22
 */

?>
<div id="clndr" class="clearfix">
    <script type="text/template" id="clndr-template">
        <div class="clndr-controls">
            <div class="clndr-previous-button">&lt;</div>
            <div class="clndr-next-button">&gt;</div>
            <div class="current-month">
                <%= month %>
                <%= year %>
            </div>

        </div>
        <div class="clndr-grid" style="width: <%= eventsThisMonth.length > 0 ? '65%' : '100%' %>">
            <div class="days-of-the-week clearfix">
                <% _.each(daysOfTheWeek, function(day) { %>
                <div class="header-day">
                    <%= day %>
                </div>
                <% }); %>
            </div>
            <div class="days">
                <% _.each(days, function(day) { %>
                <div class="<%= day.classes %>" id="<%= day.id %>"><span class="day-number"><%= day.day %></span></div>
                <% }); %>
            </div>
        </div>
        <div class="event-listing" style="display: <%= eventsThisMonth.length > 0 ? 'block' : 'none' %>">


            <div class="event-listing-title"><?= \mhunesi\clndrjs\ClndrJsWidget::t('Event this month') ?></div>
            <div class="event-items">
            <% _.each(eventsThisMonth, function(event) { %>
            <div class="event-item font-small-3">
                <div class="event-item-day font-small-2">
                    <%= event.date %>
                </div>
                <div class="event-item-name text-bold-600">
                    <%= event.title %>
                </div>
                <div class="event-item-location">
                    <%= event.location %>
                </div>
            </div>
            <% }); %>
            </div>

        </div>
    </script>
</div>