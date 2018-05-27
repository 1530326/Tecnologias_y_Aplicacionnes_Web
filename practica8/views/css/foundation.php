<!DOCTYPE html>
<html>
<head>
  <title>Template</title>

  <style type="text/css">
    meta.foundation-version {
  font-family: "/5.5.3/"; }

meta.foundation-mq-small {
  font-family: "/only screen/";
  width: 0; }

meta.foundation-mq-small-only {
  font-family: "/only screen and (max-width: 40em)/";
  width: 0; }

meta.foundation-mq-medium {
  font-family: "/only screen and (min-width:40.0625em)/";
  width: 40.0625em; }

meta.foundation-mq-medium-only {
  font-family: "/only screen and (min-width:40.0625em) and (max-width:64em)/";
  width: 40.0625em; }

meta.foundation-mq-large {
  font-family: "/only screen and (min-width:64.0625em)/";
  width: 64.0625em; }

meta.foundation-mq-large-only {
  font-family: "/only screen and (min-width:64.0625em) and (max-width:90em)/";
  width: 64.0625em; }

meta.foundation-mq-xlarge {
  font-family: "/only screen and (min-width:90.0625em)/";
  width: 90.0625em; }

meta.foundation-mq-xlarge-only {
  font-family: "/only screen and (min-width:90.0625em) and (max-width:120em)/";
  width: 90.0625em; }

meta.foundation-mq-xxlarge {
  font-family: "/only screen and (min-width:120.0625em)/";
  width: 120.0625em; }

meta.foundation-data-attribute-namespace {
  font-family: false; }

html, body {
  height: 100%; }

*,
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

html,
body {
  font-size: 100%; }

body {
  background: #fff;
  color: #222;
  cursor: auto;
  font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
  font-style: normal;
  font-weight: normal;
  line-height: 1.5;
  margin: 0;
  padding: 0;
  position: relative; }

a:hover {
  cursor: pointer; }

img {
  max-width: 100%;
  height: auto; }

img {
  -ms-interpolation-mode: bicubic; }

#map_canvas img,
#map_canvas embed,
#map_canvas object,
.map_canvas img,
.map_canvas embed,
.map_canvas object,
.mqa-display img,
.mqa-display embed,
.mqa-display object {
  max-width: none !important; }

.left {
  float: left !important; }

.right {
  float: right !important; }

.clearfix:before, .clearfix:after {
  content: " ";
  display: table; }
.clearfix:after {
  clear: both; }

.hide {
  display: none; }

.invisible {
  visibility: hidden; }

.antialiased {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale; }

img {
  display: inline-block;
  vertical-align: middle; }

textarea {
  height: auto;
  min-height: 50px; }

select {
  width: 100%; }

.row {
  margin: 0 auto;
  max-width: 62.5rem;
  width: 100%; }
  .row:before, .row:after {
    content: " ";
    display: table; }
  .row:after {
    clear: both; }
  .row.collapse > .column,
  .row.collapse > .columns {
    padding-left: 0;
    padding-right: 0; }
  .row.collapse .row {
    margin-left: 0;
    margin-right: 0; }
  .row .row {
    margin: 0 -0.9375rem;
    max-width: none;
    width: auto; }
    .row .row:before, .row .row:after {
      content: " ";
      display: table; }
    .row .row:after {
      clear: both; }
    .row .row.collapse {
      margin: 0;
      max-width: none;
      width: auto; }
      .row .row.collapse:before, .row .row.collapse:after {
        content: " ";
        display: table; }
      .row .row.collapse:after {
        clear: both; }

.column,
.columns {
  padding-left: 0.9375rem;
  padding-right: 0.9375rem;
  width: 100%;
  float: left; }

.column + .column:last-child,
.columns + .column:last-child, .column +
.columns:last-child,
.columns +
.columns:last-child {
  float: right; }
.column + .column.end,
.columns + .column.end, .column +
.columns.end,
.columns +
.columns.end {
  float: left; }

@media only screen {
  .small-push-0 {
    position: relative;
    left: 0;
    right: auto; }

  .small-pull-0 {
    position: relative;
    right: 0;
    left: auto; }

  .small-push-1 {
    position: relative;
    left: 8.33333%;
    right: auto; }

  .small-pull-1 {
    position: relative;
    right: 8.33333%;
    left: auto; }

  .small-push-2 {
    position: relative;
    left: 16.66667%;
    right: auto; }

  .small-pull-2 {
    position: relative;
    right: 16.66667%;
    left: auto; }

  .small-push-3 {
    position: relative;
    left: 25%;
    right: auto; }

  .small-pull-3 {
    position: relative;
    right: 25%;
    left: auto; }

  .small-push-4 {
    position: relative;
    left: 33.33333%;
    right: auto; }

  .small-pull-4 {
    position: relative;
    right: 33.33333%;
    left: auto; }

  .small-push-5 {
    position: relative;
    left: 41.66667%;
    right: auto; }

  .small-pull-5 {
    position: relative;
    right: 41.66667%;
    left: auto; }

  .small-push-6 {
    position: relative;
    left: 50%;
    right: auto; }

  .small-pull-6 {
    position: relative;
    right: 50%;
    left: auto; }

  .small-push-7 {
    position: relative;
    left: 58.33333%;
    right: auto; }

  .small-pull-7 {
    position: relative;
    right: 58.33333%;
    left: auto; }

  .small-push-8 {
    position: relative;
    left: 66.66667%;
    right: auto; }

  .small-pull-8 {
    position: relative;
    right: 66.66667%;
    left: auto; }

  .small-push-9 {
    position: relative;
    left: 75%;
    right: auto; }

  .small-pull-9 {
    position: relative;
    right: 75%;
    left: auto; }

  .small-push-10 {
    position: relative;
    left: 83.33333%;
    right: auto; }

  .small-pull-10 {
    position: relative;
    right: 83.33333%;
    left: auto; }

  .small-push-11 {
    position: relative;
    left: 91.66667%;
    right: auto; }

  .small-pull-11 {
    position: relative;
    right: 91.66667%;
    left: auto; }

  .column,
  .columns {
    position: relative;
    padding-left: 0.9375rem;
    padding-right: 0.9375rem;
    float: left; }

  .small-1 {
    width: 8.33333%; }

  .small-2 {
    width: 16.66667%; }

  .small-3 {
    width: 25%; }

  .small-4 {
    width: 33.33333%; }

  .small-5 {
    width: 41.66667%; }

  .small-6 {
    width: 50%; }

  .small-7 {
    width: 58.33333%; }

  .small-8 {
    width: 66.66667%; }

  .small-9 {
    width: 75%; }

  .small-10 {
    width: 83.33333%; }

  .small-11 {
    width: 91.66667%; }

  .small-12 {
    width: 100%; }

  .small-offset-0 {
    margin-left: 0 !important; }

  .small-offset-1 {
    margin-left: 8.33333% !important; }

  .small-offset-2 {
    margin-left: 16.66667% !important; }

  .small-offset-3 {
    margin-left: 25% !important; }

  .small-offset-4 {
    margin-left: 33.33333% !important; }

  .small-offset-5 {
    margin-left: 41.66667% !important; }

  .small-offset-6 {
    margin-left: 50% !important; }

  .small-offset-7 {
    margin-left: 58.33333% !important; }

  .small-offset-8 {
    margin-left: 66.66667% !important; }

  .small-offset-9 {
    margin-left: 75% !important; }

  .small-offset-10 {
    margin-left: 83.33333% !important; }

  .small-offset-11 {
    margin-left: 91.66667% !important; }

  .small-reset-order {
    float: left;
    left: auto;
    margin-left: 0;
    margin-right: 0;
    right: auto; }

  .column.small-centered,
  .columns.small-centered {
    margin-left: auto;
    margin-right: auto;
    float: none; }

  .column.small-uncentered,
  .columns.small-uncentered {
    float: left;
    margin-left: 0;
    margin-right: 0; }

  .column.small-centered:last-child,
  .columns.small-centered:last-child {
    float: none; }

  .column.small-uncentered:last-child,
  .columns.small-uncentered:last-child {
    float: left; }

  .column.small-uncentered.opposite,
  .columns.small-uncentered.opposite {
    float: right; }

  .row.small-collapse > .column,
  .row.small-collapse > .columns {
    padding-left: 0;
    padding-right: 0; }
  .row.small-collapse .row {
    margin-left: 0;
    margin-right: 0; }
  .row.small-uncollapse > .column,
  .row.small-uncollapse > .columns {
    padding-left: 0.9375rem;
    padding-right: 0.9375rem;
    float: left; } }
@media only screen and (min-width: 40.0625em) {
  .medium-push-0 {
    position: relative;
    left: 0;
    right: auto; }

  .medium-pull-0 {
    position: relative;
    right: 0;
    left: auto; }

  .medium-push-1 {
    position: relative;
    left: 8.33333%;
    right: auto; }

  .medium-pull-1 {
    position: relative;
    right: 8.33333%;
    left: auto; }

  .medium-push-2 {
    position: relative;
    left: 16.66667%;
    right: auto; }

  .medium-pull-2 {
    position: relative;
    right: 16.66667%;
    left: auto; }

  .medium-push-3 {
    position: relative;
    left: 25%;
    right: auto; }

  .medium-pull-3 {
    position: relative;
    right: 25%;
    left: auto; }

  .medium-push-4 {
    position: relative;
    left: 33.33333%;
    right: auto; }

  .medium-pull-4 {
    position: relative;
    right: 33.33333%;
    left: auto; }

  .medium-push-5 {
    position: relative;
    left: 41.66667%;
    right: auto; }

  .medium-pull-5 {
    position: relative;
    right: 41.66667%;
    left: auto; }

  .medium-push-6 {
    position: relative;
    left: 50%;
    right: auto; }

  .medium-pull-6 {
    position: relative;
    right: 50%;
    left: auto; }

  .medium-push-7 {
    position: relative;
    left: 58.33333%;
    right: auto; }

  .medium-pull-7 {
    position: relative;
    right: 58.33333%;
    left: auto; }

  .medium-push-8 {
    position: relative;
    left: 66.66667%;
    right: auto; }

  .medium-pull-8 {
    position: relative;
    right: 66.66667%;
    left: auto; }

  .medium-push-9 {
    position: relative;
    left: 75%;
    right: auto; }

  .medium-pull-9 {
    position: relative;
    right: 75%;
    left: auto; }

  .medium-push-10 {
    position: relative;
    left: 83.33333%;
    right: auto; }

  .medium-pull-10 {
    position: relative;
    right: 83.33333%;
    left: auto; }

  .medium-push-11 {
    position: relative;
    left: 91.66667%;
    right: auto; }

  .medium-pull-11 {
    position: relative;
    right: 91.66667%;
    left: auto; }

  .column,
  .columns {
    position: relative;
    padding-left: 0.9375rem;
    padding-right: 0.9375rem;
    float: left; }

  .medium-1 {
    width: 8.33333%; }

  .medium-2 {
    width: 16.66667%; }

  .medium-3 {
    width: 25%; }

  .medium-4 {
    width: 33.33333%; }

  .medium-5 {
    width: 41.66667%; }

  .medium-6 {
    width: 50%; }

  .medium-7 {
    width: 58.33333%; }

  .medium-8 {
    width: 66.66667%; }

  .medium-9 {
    width: 75%; }

  .medium-10 {
    width: 83.33333%; }

  .medium-11 {
    width: 91.66667%; }

  .medium-12 {
    width: 100%; }

  .medium-offset-0 {
    margin-left: 0 !important; }

  .medium-offset-1 {
    margin-left: 8.33333% !important; }

  .medium-offset-2 {
    margin-left: 16.66667% !important; }

  .medium-offset-3 {
    margin-left: 25% !important; }

  .medium-offset-4 {
    margin-left: 33.33333% !important; }

  .medium-offset-5 {
    margin-left: 41.66667% !important; }

  .medium-offset-6 {
    margin-left: 50% !important; }

  .medium-offset-7 {
    margin-left: 58.33333% !important; }

  .medium-offset-8 {
    margin-left: 66.66667% !important; }

  .medium-offset-9 {
    margin-left: 75% !important; }

  .medium-offset-10 {
    margin-left: 83.33333% !important; }

  .medium-offset-11 {
    margin-left: 91.66667% !important; }

  .medium-reset-order {
    float: left;
    left: auto;
    margin-left: 0;
    margin-right: 0;
    right: auto; }

  .column.medium-centered,
  .columns.medium-centered {
    margin-left: auto;
    margin-right: auto;
    float: none; }

  .column.medium-uncentered,
  .columns.medium-uncentered {
    float: left;
    margin-left: 0;
    margin-right: 0; }

  .column.medium-centered:last-child,
  .columns.medium-centered:last-child {
    float: none; }

  .column.medium-uncentered:last-child,
  .columns.medium-uncentered:last-child {
    float: left; }

  .column.medium-uncentered.opposite,
  .columns.medium-uncentered.opposite {
    float: right; }

  .row.medium-collapse > .column,
  .row.medium-collapse > .columns {
    padding-left: 0;
    padding-right: 0; }
  .row.medium-collapse .row {
    margin-left: 0;
    margin-right: 0; }
  .row.medium-uncollapse > .column,
  .row.medium-uncollapse > .columns {
    padding-left: 0.9375rem;
    padding-right: 0.9375rem;
    float: left; }

  .push-0 {
    position: relative;
    left: 0;
    right: auto; }

  .pull-0 {
    position: relative;
    right: 0;
    left: auto; }

  .push-1 {
    position: relative;
    left: 8.33333%;
    right: auto; }

  .pull-1 {
    position: relative;
    right: 8.33333%;
    left: auto; }

  .push-2 {
    position: relative;
    left: 16.66667%;
    right: auto; }

  .pull-2 {
    position: relative;
    right: 16.66667%;
    left: auto; }

  .push-3 {
    position: relative;
    left: 25%;
    right: auto; }

  .pull-3 {
    position: relative;
    right: 25%;
    left: auto; }

  .push-4 {
    position: relative;
    left: 33.33333%;
    right: auto; }

  .pull-4 {
    position: relative;
    right: 33.33333%;
    left: auto; }

  .push-5 {
    position: relative;
    left: 41.66667%;
    right: auto; }

  .pull-5 {
    position: relative;
    right: 41.66667%;
    left: auto; }

  .push-6 {
    position: relative;
    left: 50%;
    right: auto; }

  .pull-6 {
    position: relative;
    right: 50%;
    left: auto; }

  .push-7 {
    position: relative;
    left: 58.33333%;
    right: auto; }

  .pull-7 {
    position: relative;
    right: 58.33333%;
    left: auto; }

  .push-8 {
    position: relative;
    left: 66.66667%;
    right: auto; }

  .pull-8 {
    position: relative;
    right: 66.66667%;
    left: auto; }

  .push-9 {
    position: relative;
    left: 75%;
    right: auto; }

  .pull-9 {
    position: relative;
    right: 75%;
    left: auto; }

  .push-10 {
    position: relative;
    left: 83.33333%;
    right: auto; }

  .pull-10 {
    position: relative;
    right: 83.33333%;
    left: auto; }

  .push-11 {
    position: relative;
    left: 91.66667%;
    right: auto; }

  .pull-11 {
    position: relative;
    right: 91.66667%;
    left: auto; } }
@media only screen and (min-width: 64.0625em) {
  .large-push-0 {
    position: relative;
    left: 0;
    right: auto; }

  .large-pull-0 {
    position: relative;
    right: 0;
    left: auto; }

  .large-push-1 {
    position: relative;
    left: 8.33333%;
    right: auto; }

  .large-pull-1 {
    position: relative;
    right: 8.33333%;
    left: auto; }

  .large-push-2 {
    position: relative;
    left: 16.66667%;
    right: auto; }

  .large-pull-2 {
    position: relative;
    right: 16.66667%;
    left: auto; }

  .large-push-3 {
    position: relative;
    left: 25%;
    right: auto; }

  .large-pull-3 {
    position: relative;
    right: 25%;
    left: auto; }

  .large-push-4 {
    position: relative;
    left: 33.33333%;
    right: auto; }

  .large-pull-4 {
    position: relative;
    right: 33.33333%;
    left: auto; }

  .large-push-5 {
    position: relative;
    left: 41.66667%;
    right: auto; }

  .large-pull-5 {
    position: relative;
    right: 41.66667%;
    left: auto; }

  .large-push-6 {
    position: relative;
    left: 50%;
    right: auto; }

  .large-pull-6 {
    position: relative;
    right: 50%;
    left: auto; }

  .large-push-7 {
    position: relative;
    left: 58.33333%;
    right: auto; }

  .large-pull-7 {
    position: relative;
    right: 58.33333%;
    left: auto; }

  .large-push-8 {
    position: relative;
    left: 66.66667%;
    right: auto; }

  .large-pull-8 {
    position: relative;
    right: 66.66667%;
    left: auto; }

  .large-push-9 {
    position: relative;
    left: 75%;
    right: auto; }

  .large-pull-9 {
    position: relative;
    right: 75%;
    left: auto; }

  .large-push-10 {
    position: relative;
    left: 83.33333%;
    right: auto; }

  .large-pull-10 {
    position: relative;
    right: 83.33333%;
    left: auto; }

  .large-push-11 {
    position: relative;
    left: 91.66667%;
    right: auto; }

  .large-pull-11 {
    position: relative;
    right: 91.66667%;
    left: auto; }

  .column,
  .columns {
    position: relative;
    padding-left: 0.9375rem;
    padding-right: 0.9375rem;
    float: left; }

  .large-1 {
    width: 8.33333%; }

  .large-2 {
    width: 16.66667%; }

  .large-3 {
    width: 25%; }

  .large-4 {
    width: 33.33333%; }

  .large-5 {
    width: 41.66667%; }

  .large-6 {
    width: 50%; }

  .large-7 {
    width: 58.33333%; }

  .large-8 {
    width: 66.66667%; }

  .large-9 {
    width: 75%; }

  .large-10 {
    width: 83.33333%; }

  .large-11 {
    width: 91.66667%; }

  .large-12 {
    width: 100%; }

  .large-offset-0 {
    margin-left: 0 !important; }

  .large-offset-1 {
    margin-left: 8.33333% !important; }

  .large-offset-2 {
    margin-left: 16.66667% !important; }

  .large-offset-3 {
    margin-left: 25% !important; }

  .large-offset-4 {
    margin-left: 33.33333% !important; }

  .large-offset-5 {
    margin-left: 41.66667% !important; }

  .large-offset-6 {
    margin-left: 50% !important; }

  .large-offset-7 {
    margin-left: 58.33333% !important; }

  .large-offset-8 {
    margin-left: 66.66667% !important; }

  .large-offset-9 {
    margin-left: 75% !important; }

  .large-offset-10 {
    margin-left: 83.33333% !important; }

  .large-offset-11 {
    margin-left: 91.66667% !important; }

  .large-reset-order {
    float: left;
    left: auto;
    margin-left: 0;
    margin-right: 0;
    right: auto; }

  .column.large-centered,
  .columns.large-centered {
    margin-left: auto;
    margin-right: auto;
    float: none; }

  .column.large-uncentered,
  .columns.large-uncentered {
    float: left;
    margin-left: 0;
    margin-right: 0; }

  .column.large-centered:last-child,
  .columns.large-centered:last-child {
    float: none; }

  .column.large-uncentered:last-child,
  .columns.large-uncentered:last-child {
    float: left; }

  .column.large-uncentered.opposite,
  .columns.large-uncentered.opposite {
    float: right; }

  .row.large-collapse > .column,
  .row.large-collapse > .columns {
    padding-left: 0;
    padding-right: 0; }
  .row.large-collapse .row {
    margin-left: 0;
    margin-right: 0; }
  .row.large-uncollapse > .column,
  .row.large-uncollapse > .columns {
    padding-left: 0.9375rem;
    padding-right: 0.9375rem;
    float: left; }

  .push-0 {
    position: relative;
    left: 0;
    right: auto; }

  .pull-0 {
    position: relative;
    right: 0;
    left: auto; }

  .push-1 {
    position: relative;
    left: 8.33333%;
    right: auto; }

  .pull-1 {
    position: relative;
    right: 8.33333%;
    left: auto; }

  .push-2 {
    position: relative;
    left: 16.66667%;
    right: auto; }

  .pull-2 {
    position: relative;
    right: 16.66667%;
    left: auto; }

  .push-3 {
    position: relative;
    left: 25%;
    right: auto; }

  .pull-3 {
    position: relative;
    right: 25%;
    left: auto; }

  .push-4 {
    position: relative;
    left: 33.33333%;
    right: auto; }

  .pull-4 {
    position: relative;
    right: 33.33333%;
    left: auto; }

  .push-5 {
    position: relative;
    left: 41.66667%;
    right: auto; }

  .pull-5 {
    position: relative;
    right: 41.66667%;
    left: auto; }

  .push-6 {
    position: relative;
    left: 50%;
    right: auto; }

  .pull-6 {
    position: relative;
    right: 50%;
    left: auto; }

  .push-7 {
    position: relative;
    left: 58.33333%;
    right: auto; }

  .pull-7 {
    position: relative;
    right: 58.33333%;
    left: auto; }

  .push-8 {
    position: relative;
    left: 66.66667%;
    right: auto; }

  .pull-8 {
    position: relative;
    right: 66.66667%;
    left: auto; }

  .push-9 {
    position: relative;
    left: 75%;
    right: auto; }

  .pull-9 {
    position: relative;
    right: 75%;
    left: auto; }

  .push-10 {
    position: relative;
    left: 83.33333%;
    right: auto; }

  .pull-10 {
    position: relative;
    right: 83.33333%;
    left: auto; }

  .push-11 {
    position: relative;
    left: 91.66667%;
    right: auto; }

  .pull-11 {
    position: relative;
    right: 91.66667%;
    left: auto; } }
button, .button {
  -webkit-appearance: none;
  -moz-appearance: none;
  border-radius: 0;
  border-style: solid;
  border-width: 0;
  cursor: pointer;
  font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
  font-weight: normal;
  line-height: normal;
  margin: 0 0 1.25rem;
  position: relative;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding: 1rem 2rem 1.0625rem 2rem;
  font-size: 1rem;
  background-color: #008CBA;
  border-color: #007095;
  color: #FFFFFF;
  transition: background-color 300ms ease-out; }
  button:hover, button:focus, .button:hover, .button:focus {
    background-color: #007095; }
  button:hover, button:focus, .button:hover, .button:focus {
    color: #FFFFFF; }
  button.secondary, .button.secondary {
    background-color: #e7e7e7;
    border-color: #b9b9b9;
    color: #333333; }
    button.secondary:hover, button.secondary:focus, .button.secondary:hover, .button.secondary:focus {
      background-color: #b9b9b9; }
    button.secondary:hover, button.secondary:focus, .button.secondary:hover, .button.secondary:focus {
      color: #333333; }
  button.success, .button.success {
    background-color: #43AC6A;
    border-color: #368a55;
    color: #FFFFFF; }
    button.success:hover, button.success:focus, .button.success:hover, .button.success:focus {
      background-color: #368a55; }
    button.success:hover, button.success:focus, .button.success:hover, .button.success:focus {
      color: #FFFFFF; }
  button.alert, .button.alert {
    background-color: #f04124;
    border-color: #cf2a0e;
    color: #FFFFFF; }
    button.alert:hover, button.alert:focus, .button.alert:hover, .button.alert:focus {
      background-color: #cf2a0e; }
    button.alert:hover, button.alert:focus, .button.alert:hover, .button.alert:focus {
      color: #FFFFFF; }
  button.warning, .button.warning {
    background-color: #f08a24;
    border-color: #cf6e0e;
    color: #FFFFFF; }
    button.warning:hover, button.warning:focus, .button.warning:hover, .button.warning:focus {
      background-color: #cf6e0e; }
    button.warning:hover, button.warning:focus, .button.warning:hover, .button.warning:focus {
      color: #FFFFFF; }
  button.info, .button.info {
    background-color: #a0d3e8;
    border-color: #61b6d9;
    color: #333333; }
    button.info:hover, button.info:focus, .button.info:hover, .button.info:focus {
      background-color: #61b6d9; }
    button.info:hover, button.info:focus, .button.info:hover, .button.info:focus {
      color: #FFFFFF; }
  button.large, .button.large {
    padding: 1.125rem 2.25rem 1.1875rem 2.25rem;
    font-size: 1.25rem; }
  button.small, .button.small {
    padding: 0.875rem 1.75rem 0.9375rem 1.75rem;
    font-size: 0.8125rem; }
  button.tiny, .button.tiny {
    padding: 0.625rem 1.25rem 0.6875rem 1.25rem;
    font-size: 0.6875rem; }
  button.expand, .button.expand {
    padding: 1rem 2rem 1.0625rem 2rem;
    font-size: 1rem;
    padding-bottom: 1.0625rem;
    padding-top: 1rem;
    padding-left: 1rem;
    padding-right: 1rem;
    width: 100%; }
  button.left-align, .button.left-align {
    text-align: left;
    text-indent: 0.75rem; }
  button.right-align, .button.right-align {
    text-align: right;
    padding-right: 0.75rem; }
  button.radius, .button.radius {
    border-radius: 3px; }
  button.round, .button.round {
    border-radius: 1000px; }
  button.disabled, button[disabled], .button.disabled, .button[disabled] {
    background-color: #008CBA;
    border-color: #007095;
    color: #FFFFFF;
    box-shadow: none;
    cursor: default;
    opacity: 0.7; }
    button.disabled:hover, button.disabled:focus, button[disabled]:hover, button[disabled]:focus, .button.disabled:hover, .button.disabled:focus, .button[disabled]:hover, .button[disabled]:focus {
      background-color: #007095; }
    button.disabled:hover, button.disabled:focus, button[disabled]:hover, button[disabled]:focus, .button.disabled:hover, .button.disabled:focus, .button[disabled]:hover, .button[disabled]:focus {
      color: #FFFFFF; }
    button.disabled:hover, button.disabled:focus, button[disabled]:hover, button[disabled]:focus, .button.disabled:hover, .button.disabled:focus, .button[disabled]:hover, .button[disabled]:focus {
      background-color: #008CBA; }
    button.disabled.secondary, button[disabled].secondary, .button.disabled.secondary, .button[disabled].secondary {
      background-color: #e7e7e7;
      border-color: #b9b9b9;
      color: #333333;
      box-shadow: none;
      cursor: default;
      opacity: 0.7; }
      button.disabled.secondary:hover, button.disabled.secondary:focus, button[disabled].secondary:hover, button[disabled].secondary:focus, .button.disabled.secondary:hover, .button.disabled.secondary:focus, .button[disabled].secondary:hover, .button[disabled].secondary:focus {
        background-color: #b9b9b9; }
      button.disabled.secondary:hover, button.disabled.secondary:focus, button[disabled].secondary:hover, button[disabled].secondary:focus, .button.disabled.secondary:hover, .button.disabled.secondary:focus, .button[disabled].secondary:hover, .button[disabled].secondary:focus {
        color: #333333; }
      button.disabled.secondary:hover, button.disabled.secondary:focus, button[disabled].secondary:hover, button[disabled].secondary:focus, .button.disabled.secondary:hover, .button.disabled.secondary:focus, .button[disabled].secondary:hover, .button[disabled].secondary:focus {
        background-color: #e7e7e7; }
    button.disabled.success, button[disabled].success, .button.disabled.success, .button[disabled].success {
      background-color: #43AC6A;
      border-color: #368a55;
      color: #FFFFFF;
      box-shadow: none;
      cursor: default;
      opacity: 0.7; }
      button.disabled.success:hover, button.disabled.success:focus, button[disabled].success:hover, button[disabled].success:focus, .button.disabled.success:hover, .button.disabled.success:focus, .button[disabled].success:hover, .button[disabled].success:focus {
        background-color: #368a55; }
      button.disabled.success:hover, button.disabled.success:focus, button[disabled].success:hover, button[disabled].success:focus, .button.disabled.success:hover, .button.disabled.success:focus, .button[disabled].success:hover, .button[disabled].success:focus {
        color: #FFFFFF; }
      button.disabled.success:hover, button.disabled.success:focus, button[disabled].success:hover, button[disabled].success:focus, .button.disabled.success:hover, .button.disabled.success:focus, .button[disabled].success:hover, .button[disabled].success:focus {
        background-color: #43AC6A; }
    button.disabled.alert, button[disabled].alert, .button.disabled.alert, .button[disabled].alert {
      background-color: #f04124;
      border-color: #cf2a0e;
      color: #FFFFFF;
      box-shadow: none;
      cursor: default;
      opacity: 0.7; }
      button.disabled.alert:hover, button.disabled.alert:focus, button[disabled].alert:hover, button[disabled].alert:focus, .button.disabled.alert:hover, .button.disabled.alert:focus, .button[disabled].alert:hover, .button[disabled].alert:focus {
        background-color: #cf2a0e; }
      button.disabled.alert:hover, button.disabled.alert:focus, button[disabled].alert:hover, button[disabled].alert:focus, .button.disabled.alert:hover, .button.disabled.alert:focus, .button[disabled].alert:hover, .button[disabled].alert:focus {
        color: #FFFFFF; }
      button.disabled.alert:hover, button.disabled.alert:focus, button[disabled].alert:hover, button[disabled].alert:focus, .button.disabled.alert:hover, .button.disabled.alert:focus, .button[disabled].alert:hover, .button[disabled].alert:focus {
        background-color: #f04124; }
    button.disabled.warning, button[disabled].warning, .button.disabled.warning, .button[disabled].warning {
      background-color: #f08a24;
      border-color: #cf6e0e;
      color: #FFFFFF;
      box-shadow: none;
      cursor: default;
      opacity: 0.7; }
      button.disabled.warning:hover, button.disabled.warning:focus, button[disabled].warning:hover, button[disabled].warning:focus, .button.disabled.warning:hover, .button.disabled.warning:focus, .button[disabled].warning:hover, .button[disabled].warning:focus {
        background-color: #cf6e0e; }
      button.disabled.warning:hover, button.disabled.warning:focus, button[disabled].warning:hover, button[disabled].warning:focus, .button.disabled.warning:hover, .button.disabled.warning:focus, .button[disabled].warning:hover, .button[disabled].warning:focus {
        color: #FFFFFF; }
      button.disabled.warning:hover, button.disabled.warning:focus, button[disabled].warning:hover, button[disabled].warning:focus, .button.disabled.warning:hover, .button.disabled.warning:focus, .button[disabled].warning:hover, .button[disabled].warning:focus {
        background-color: #f08a24; }
    button.disabled.info, button[disabled].info, .button.disabled.info, .button[disabled].info {
      background-color: #a0d3e8;
      border-color: #61b6d9;
      color: #333333;
      box-shadow: none;
      cursor: default;
      opacity: 0.7; }
      button.disabled.info:hover, button.disabled.info:focus, button[disabled].info:hover, button[disabled].info:focus, .button.disabled.info:hover, .button.disabled.info:focus, .button[disabled].info:hover, .button[disabled].info:focus {
        background-color: #61b6d9; }
      button.disabled.info:hover, button.disabled.info:focus, button[disabled].info:hover, button[disabled].info:focus, .button.disabled.info:hover, .button.disabled.info:focus, .button[disabled].info:hover, .button[disabled].info:focus {
        color: #FFFFFF; }
      button.disabled.info:hover, button.disabled.info:focus, button[disabled].info:hover, button[disabled].info:focus, .button.disabled.info:hover, .button.disabled.info:focus, .button[disabled].info:hover, .button[disabled].info:focus {
        background-color: #a0d3e8; }

button::-moz-focus-inner {
  border: 0;
  padding: 0; }

@media only screen and (min-width: 40.0625em) {
  button, .button {
    display: inline-block; } }
/* Standard Forms */
form {
  margin: 0 0 1rem; }

/* Using forms within rows, we need to set some defaults */
form .row .row {
  margin: 0 -0.5rem; }
  form .row .row .column,
  form .row .row .columns {
    padding: 0 0.5rem; }
  form .row .row.collapse {
    margin: 0; }
    form .row .row.collapse .column,
    form .row .row.collapse .columns {
      padding: 0; }
    form .row .row.collapse input {
      -webkit-border-bottom-right-radius: 0;
      -webkit-border-top-right-radius: 0;
      border-bottom-right-radius: 0;
      border-top-right-radius: 0; }
form .row input.column,
form .row input.columns,
form .row textarea.column,
form .row textarea.columns {
  padding-left: 0.5rem; }

/* Label Styles */
label {
  color: #4d4d4d;
  cursor: pointer;
  display: block;
  font-size: 0.875rem;
  font-weight: normal;
  line-height: 1.5;
  margin-bottom: 0;
  /* Styles for required inputs */ }
  label.right {
    float: none !important;
    text-align: right; }
  label.inline {
    margin: 0 0 1rem 0;
    padding: 0.5625rem 0; }
  label small {
    text-transform: capitalize;
    color: #676767; }

/* Attach elements to the beginning or end of an input */
.prefix,
.postfix {
  border-style: solid;
  border-width: 1px;
  display: block;
  font-size: 0.875rem;
  height: 2.3125rem;
  line-height: 2.3125rem;
  overflow: visible;
  padding-bottom: 0;
  padding-top: 0;
  position: relative;
  text-align: center;
  width: 100%;
  z-index: 2; }

/* Adjust padding, alignment and radius if pre/post element is a button */
.postfix.button {
  border: none;
  padding-left: 0;
  padding-right: 0;
  padding-bottom: 0;
  padding-top: 0;
  text-align: center; }

.prefix.button {
  border: none;
  padding-left: 0;
  padding-right: 0;
  padding-bottom: 0;
  padding-top: 0;
  text-align: center; }

.prefix.button.radius {
  border-radius: 0;
  -webkit-border-bottom-left-radius: 3px;
  -webkit-border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  border-top-left-radius: 3px; }

.postfix.button.radius {
  border-radius: 0;
  -webkit-border-bottom-right-radius: 3px;
  -webkit-border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
  border-top-right-radius: 3px; }

.prefix.button.round {
  border-radius: 0;
  -webkit-border-bottom-left-radius: 1000px;
  -webkit-border-top-left-radius: 1000px;
  border-bottom-left-radius: 1000px;
  border-top-left-radius: 1000px; }

.postfix.button.round {
  border-radius: 0;
  -webkit-border-bottom-right-radius: 1000px;
  -webkit-border-top-right-radius: 1000px;
  border-bottom-right-radius: 1000px;
  border-top-right-radius: 1000px; }

/* Separate prefix and postfix styles when on span or label so buttons keep their own */
span.prefix, label.prefix {
  background: #f2f2f2;
  border-right: none;
  color: #333333;
  border-color: #cccccc; }

span.postfix, label.postfix {
  background: #f2f2f2;
  border-left: none;
  color: #333333;
  border-color: #cccccc; }

/* We use this to get basic styling on all basic form elements */
input:not([type]), input[type="text"], input[type="password"], input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="month"], input[type="week"], input[type="email"], input[type="number"], input[type="search"], input[type="tel"], input[type="time"], input[type="url"], input[type="color"], textarea {
  -webkit-appearance: none;
  -moz-appearance: none;
  border-radius: 0;
  background-color: #FFFFFF;
  border-style: solid;
  border-width: 1px;
  border-color: #cccccc;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  color: rgba(0, 0, 0, 0.75);
  display: block;
  font-family: inherit;
  font-size: 0.875rem;
  height: 2.3125rem;
  margin: 0 0 1rem 0;
  padding: 0.5rem;
  width: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: border-color 0.15s linear, background 0.15s linear;
  -moz-transition: border-color 0.15s linear, background 0.15s linear;
  -ms-transition: border-color 0.15s linear, background 0.15s linear;
  -o-transition: border-color 0.15s linear, background 0.15s linear;
  transition: border-color 0.15s linear, background 0.15s linear; }
  input:not([type]):focus, input[type="text"]:focus, input[type="password"]:focus, input[type="date"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="month"]:focus, input[type="week"]:focus, input[type="email"]:focus, input[type="number"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="time"]:focus, input[type="url"]:focus, input[type="color"]:focus, textarea:focus {
    background: #fafafa;
    border-color: #999999;
    outline: none; }
  input:not([type]):disabled, input[type="text"]:disabled, input[type="password"]:disabled, input[type="date"]:disabled, input[type="datetime"]:disabled, input[type="datetime-local"]:disabled, input[type="month"]:disabled, input[type="week"]:disabled, input[type="email"]:disabled, input[type="number"]:disabled, input[type="search"]:disabled, input[type="tel"]:disabled, input[type="time"]:disabled, input[type="url"]:disabled, input[type="color"]:disabled, textarea:disabled {
    background-color: #DDDDDD;
    cursor: default; }
  input:not([type])[disabled], input:not([type])[readonly], fieldset[disabled] input:not([type]), input[type="text"][disabled], input[type="text"][readonly], fieldset[disabled] input[type="text"], input[type="password"][disabled], input[type="password"][readonly], fieldset[disabled] input[type="password"], input[type="date"][disabled], input[type="date"][readonly], fieldset[disabled] input[type="date"], input[type="datetime"][disabled], input[type="datetime"][readonly], fieldset[disabled] input[type="datetime"], input[type="datetime-local"][disabled], input[type="datetime-local"][readonly], fieldset[disabled] input[type="datetime-local"], input[type="month"][disabled], input[type="month"][readonly], fieldset[disabled] input[type="month"], input[type="week"][disabled], input[type="week"][readonly], fieldset[disabled] input[type="week"], input[type="email"][disabled], input[type="email"][readonly], fieldset[disabled] input[type="email"], input[type="number"][disabled], input[type="number"][readonly], fieldset[disabled] input[type="number"], input[type="search"][disabled], input[type="search"][readonly], fieldset[disabled] input[type="search"], input[type="tel"][disabled], input[type="tel"][readonly], fieldset[disabled] input[type="tel"], input[type="time"][disabled], input[type="time"][readonly], fieldset[disabled] input[type="time"], input[type="url"][disabled], input[type="url"][readonly], fieldset[disabled] input[type="url"], input[type="color"][disabled], input[type="color"][readonly], fieldset[disabled] input[type="color"], textarea[disabled], textarea[readonly], fieldset[disabled] textarea {
    background-color: #DDDDDD;
    cursor: default; }
  input:not([type]).radius, input[type="text"].radius, input[type="password"].radius, input[type="date"].radius, input[type="datetime"].radius, input[type="datetime-local"].radius, input[type="month"].radius, input[type="week"].radius, input[type="email"].radius, input[type="number"].radius, input[type="search"].radius, input[type="tel"].radius, input[type="time"].radius, input[type="url"].radius, input[type="color"].radius, textarea.radius {
    border-radius: 3px; }

form .row .prefix-radius.row.collapse input,
form .row .prefix-radius.row.collapse textarea,
form .row .prefix-radius.row.collapse select,
form .row .prefix-radius.row.collapse button {
  border-radius: 0;
  -webkit-border-bottom-right-radius: 3px;
  -webkit-border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
  border-top-right-radius: 3px; }
form .row .prefix-radius.row.collapse .prefix {
  border-radius: 0;
  -webkit-border-bottom-left-radius: 3px;
  -webkit-border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  border-top-left-radius: 3px; }
form .row .postfix-radius.row.collapse input,
form .row .postfix-radius.row.collapse textarea,
form .row .postfix-radius.row.collapse select,
form .row .postfix-radius.row.collapse button {
  border-radius: 0;
  -webkit-border-bottom-left-radius: 3px;
  -webkit-border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  border-top-left-radius: 3px; }
form .row .postfix-radius.row.collapse .postfix {
  border-radius: 0;
  -webkit-border-bottom-right-radius: 3px;
  -webkit-border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
  border-top-right-radius: 3px; }
form .row .prefix-round.row.collapse input,
form .row .prefix-round.row.collapse textarea,
form .row .prefix-round.row.collapse select,
form .row .prefix-round.row.collapse button {
  border-radius: 0;
  -webkit-border-bottom-right-radius: 1000px;
  -webkit-border-top-right-radius: 1000px;
  border-bottom-right-radius: 1000px;
  border-top-right-radius: 1000px; }
form .row .prefix-round.row.collapse .prefix {
  border-radius: 0;
  -webkit-border-bottom-left-radius: 1000px;
  -webkit-border-top-left-radius: 1000px;
  border-bottom-left-radius: 1000px;
  border-top-left-radius: 1000px; }
form .row .postfix-round.row.collapse input,
form .row .postfix-round.row.collapse textarea,
form .row .postfix-round.row.collapse select,
form .row .postfix-round.row.collapse button {
  border-radius: 0;
  -webkit-border-bottom-left-radius: 1000px;
  -webkit-border-top-left-radius: 1000px;
  border-bottom-left-radius: 1000px;
  border-top-left-radius: 1000px; }
form .row .postfix-round.row.collapse .postfix {
  border-radius: 0;
  -webkit-border-bottom-right-radius: 1000px;
  -webkit-border-top-right-radius: 1000px;
  border-bottom-right-radius: 1000px;
  border-top-right-radius: 1000px; }

input[type="submit"] {
  -webkit-appearance: none;
  -moz-appearance: none;
  border-radius: 0; }

/* Respect enforced amount of rows for textarea */
textarea[rows] {
  height: auto; }

/* Not allow resize out of parent */
textarea {
  max-width: 100%; }

::-webkit-input-placeholder {
  color: #666666; }

:-moz-placeholder {
  /* Firefox 18- */
  color: #666666; }

::-moz-placeholder {
  /* Firefox 19+ */
  color: #666666; }

:-ms-input-placeholder {
  color: #666666; }

/* Add height value for select elements to match text input height */
select {
  -webkit-appearance: none !important;
  -moz-appearance: none !important;
  background-color: #FAFAFA;
  border-radius: 0;
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeD0iMTJweCIgeT0iMHB4IiB3aWR0aD0iMjRweCIgaGVpZ2h0PSIzcHgiIHZpZXdCb3g9IjAgMCA2IDMiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDYgMyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PHBvbHlnb24gcG9pbnRzPSI1Ljk5MiwwIDIuOTkyLDMgLTAuMDA4LDAgIi8+PC9zdmc+");
  background-position: 100% center;
  background-repeat: no-repeat;
  border-style: solid;
  border-width: 1px;
  border-color: #cccccc;
  color: rgba(0, 0, 0, 0.75);
  font-family: inherit;
  font-size: 0.875rem;
  line-height: normal;
  padding: 0.5rem;
  border-radius: 0;
  height: 2.3125rem; }
  select::-ms-expand {
    display: none; }
  select.radius {
    border-radius: 3px; }
  select:focus {
    background-color: #f3f3f3;
    border-color: #999999; }
  select:disabled {
    background-color: #DDDDDD;
    cursor: default; }
  select[multiple] {
    height: auto; }

/* Adjust margin for form elements below */
input[type="file"],
input[type="checkbox"],
input[type="radio"],
select {
  margin: 0 0 1rem 0; }

input[type="checkbox"] + label,
input[type="radio"] + label {
  display: inline-block;
  margin-left: 0.5rem;
  margin-right: 1rem;
  margin-bottom: 0;
  vertical-align: baseline; }

/* Normalize file input width */
input[type="file"] {
  width: 100%; }

/* HTML5 Number spinners settings */
/* We add basic fieldset styling */
fieldset {
  border: 1px solid #DDDDDD;
  margin: 1.125rem 0;
  padding: 1.25rem; }
  fieldset legend {
    font-weight: bold;
    margin: 0;
    margin-left: -0.1875rem;
    padding: 0 0.1875rem; }

/* Error Handling */
[data-abide] .error small.error, [data-abide] .error span.error, [data-abide] span.error, [data-abide] small.error {
  display: block;
  font-size: 0.75rem;
  font-style: italic;
  font-weight: normal;
  margin-bottom: 1rem;
  margin-top: -1px;
  padding: 0.375rem 0.5625rem 0.5625rem;
  background: #f04124;
  color: #FFFFFF; }
[data-abide] span.error, [data-abide] small.error {
  display: none; }

span.error, small.error {
  display: block;
  font-size: 0.75rem;
  font-style: italic;
  font-weight: normal;
  margin-bottom: 1rem;
  margin-top: -1px;
  padding: 0.375rem 0.5625rem 0.5625rem;
  background: #f04124;
  color: #FFFFFF; }

.error input,
.error textarea,
.error select {
  margin-bottom: 0; }
.error input[type="checkbox"],
.error input[type="radio"] {
  margin-bottom: 1rem; }
.error label,
.error label.error {
  color: #f04124; }
.error small.error {
  display: block;
  font-size: 0.75rem;
  font-style: italic;
  font-weight: normal;
  margin-bottom: 1rem;
  margin-top: -1px;
  padding: 0.375rem 0.5625rem 0.5625rem;
  background: #f04124;
  color: #FFFFFF; }
.error > label > small {
  background: transparent;
  color: #676767;
  display: inline;
  font-size: 60%;
  font-style: normal;
  margin: 0;
  padding: 0;
  text-transform: capitalize; }
.error span.error-message {
  display: block; }

input.error,
textarea.error,
select.error {
  margin-bottom: 0; }

label.error {
  color: #f04124; }

meta.foundation-mq-topbar {
  font-family: "/only screen and (min-width:40.0625em)/";
  width: 40.0625em; }

/* Wrapped around .top-bar to contain to grid width */
.contain-to-grid {
  width: 100%;
  background: #333333; }
  .contain-to-grid .top-bar {
    margin-bottom: 0; }

.fixed {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 99;
  left: 0; }
  .fixed.expanded:not(.top-bar) {
    height: auto;
    max-height: 100%;
    overflow-y: auto;
    width: 100%; }
    .fixed.expanded:not(.top-bar) .title-area {
      position: fixed;
      width: 100%;
      z-index: 99; }
    .fixed.expanded:not(.top-bar) .top-bar-section {
      margin-top: 2.8125rem;
      z-index: 98; }

.top-bar {
  background: #333333;
  height: 2.8125rem;
  line-height: 2.8125rem;
  margin-bottom: 0;
  overflow: hidden;
  position: relative; }
  .top-bar ul {
    list-style: none;
    margin-bottom: 0; }
  .top-bar .row {
    max-width: none; }
  .top-bar form,
  .top-bar input,
  .top-bar select {
    margin-bottom: 0; }
  .top-bar input,
  .top-bar select {
    font-size: 0.75rem;
    height: 1.75rem;
    padding-bottom: .35rem;
    padding-top: .35rem; }
  .top-bar .button, .top-bar button {
    font-size: 0.75rem;
    margin-bottom: 0;
    padding-bottom: 0.4125rem;
    padding-top: 0.4125rem; }
    @media only screen and (max-width: 40em) {
      .top-bar .button, .top-bar button {
        position: relative;
        top: -1px; } }
  .top-bar .title-area {
    margin: 0;
    position: relative; }
  .top-bar .name {
    font-size: 16px;
    height: 2.8125rem;
    margin: 0; }
    .top-bar .name h1, .top-bar .name h2, .top-bar .name h3, .top-bar .name h4, .top-bar .name p, .top-bar .name span {
      font-size: 1.0625rem;
      line-height: 2.8125rem;
      margin: 0; }
      .top-bar .name h1 a, .top-bar .name h2 a, .top-bar .name h3 a, .top-bar .name h4 a, .top-bar .name p a, .top-bar .name span a {
        color: #FFFFFF;
        display: block;
        font-weight: normal;
        padding: 0 0.9375rem;
        width: 75%; }
  .top-bar .toggle-topbar {
    position: absolute;
    right: 0;
    top: 0; }
    .top-bar .toggle-topbar a {
      color: #FFFFFF;
      display: block;
      font-size: 0.8125rem;
      font-weight: bold;
      height: 2.8125rem;
      line-height: 2.8125rem;
      padding: 0 0.9375rem;
      position: relative;
      text-transform: uppercase; }
    .top-bar .toggle-topbar.menu-icon {
      margin-top: -16px;
      top: 50%; }
      .top-bar .toggle-topbar.menu-icon a {
        color: #FFFFFF;
        height: 34px;
        line-height: 33px;
        padding: 0 2.5rem 0 0.9375rem;
        position: relative; }
        .top-bar .toggle-topbar.menu-icon a span::after {
          content: "";
          display: block;
          height: 0;
          position: absolute;
          margin-top: -8px;
          top: 50%;
          right: 0.9375rem;
          box-shadow: 0 0 0 1px #FFFFFF, 0 7px 0 1px #FFFFFF, 0 14px 0 1px #FFFFFF;
          width: 16px; }
        .top-bar .toggle-topbar.menu-icon a span:hover:after {
          box-shadow: 0 0 0 1px "", 0 7px 0 1px "", 0 14px 0 1px ""; }
  .top-bar.expanded {
    background: transparent;
    height: auto; }
    .top-bar.expanded .title-area {
      background: #333333; }
    .top-bar.expanded .toggle-topbar a {
      color: #888888; }
      .top-bar.expanded .toggle-topbar a span::after {
        box-shadow: 0 0 0 1px #888888, 0 7px 0 1px #888888, 0 14px 0 1px #888888; }
    @media screen and (-webkit-min-device-pixel-ratio: 0) {
      .top-bar.expanded .top-bar-section .has-dropdown.moved > .dropdown,
      .top-bar.expanded .top-bar-section .dropdown {
        clip: initial; }
      .top-bar.expanded .top-bar-section .has-dropdown:not(.moved) > ul {
        padding: 0; } }

.top-bar-section {
  left: 0;
  position: relative;
  width: auto;
  transition: left 300ms ease-out; }
  .top-bar-section ul {
    display: block;
    font-size: 16px;
    height: auto;
    margin: 0;
    padding: 0;
    width: 100%; }
  .top-bar-section .divider,
  .top-bar-section [role="separator"] {
    border-top: solid 1px #1a1a1a;
    clear: both;
    height: 1px;
    width: 100%; }
  .top-bar-section ul li {
    background: #333333; }
    .top-bar-section ul li > a {
      color: #FFFFFF;
      display: block;
      font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
      font-size: 0.8125rem;
      font-weight: normal;
      padding-left: 0.9375rem;
      padding: 12px 0 12px 0.9375rem;
      text-transform: none;
      width: 100%; }
      .top-bar-section ul li > a.button {
        font-size: 0.8125rem;
        padding-left: 0.9375rem;
        padding-right: 0.9375rem;
        background-color: #008CBA;
        border-color: #007095;
        color: #FFFFFF; }
        .top-bar-section ul li > a.button:hover, .top-bar-section ul li > a.button:focus {
          background-color: #007095; }
        .top-bar-section ul li > a.button:hover, .top-bar-section ul li > a.button:focus {
          color: #FFFFFF; }
      .top-bar-section ul li > a.button.secondary {
        background-color: #e7e7e7;
        border-color: #b9b9b9;
        color: #333333; }
        .top-bar-section ul li > a.button.secondary:hover, .top-bar-section ul li > a.button.secondary:focus {
          background-color: #b9b9b9; }
        .top-bar-section ul li > a.button.secondary:hover, .top-bar-section ul li > a.button.secondary:focus {
          color: #333333; }
      .top-bar-section ul li > a.button.success {
        background-color: #43AC6A;
        border-color: #368a55;
        color: #FFFFFF; }
        .top-bar-section ul li > a.button.success:hover, .top-bar-section ul li > a.button.success:focus {
          background-color: #368a55; }
        .top-bar-section ul li > a.button.success:hover, .top-bar-section ul li > a.button.success:focus {
          color: #FFFFFF; }
      .top-bar-section ul li > a.button.alert {
        background-color: #f04124;
        border-color: #cf2a0e;
        color: #FFFFFF; }
        .top-bar-section ul li > a.button.alert:hover, .top-bar-section ul li > a.button.alert:focus {
          background-color: #cf2a0e; }
        .top-bar-section ul li > a.button.alert:hover, .top-bar-section ul li > a.button.alert:focus {
          color: #FFFFFF; }
      .top-bar-section ul li > a.button.warning {
        background-color: #f08a24;
        border-color: #cf6e0e;
        color: #FFFFFF; }
        .top-bar-section ul li > a.button.warning:hover, .top-bar-section ul li > a.button.warning:focus {
          background-color: #cf6e0e; }
        .top-bar-section ul li > a.button.warning:hover, .top-bar-section ul li > a.button.warning:focus {
          color: #FFFFFF; }
      .top-bar-section ul li > a.button.info {
        background-color: #a0d3e8;
        border-color: #61b6d9;
        color: #333333; }
        .top-bar-section ul li > a.button.info:hover, .top-bar-section ul li > a.button.info:focus {
          background-color: #61b6d9; }
        .top-bar-section ul li > a.button.info:hover, .top-bar-section ul li > a.button.info:focus {
          color: #FFFFFF; }
    .top-bar-section ul li > button {
      font-size: 0.8125rem;
      padding-left: 0.9375rem;
      padding-right: 0.9375rem;
      background-color: #008CBA;
      border-color: #007095;
      color: #FFFFFF; }
      .top-bar-section ul li > button:hover, .top-bar-section ul li > button:focus {
        background-color: #007095; }
      .top-bar-section ul li > button:hover, .top-bar-section ul li > button:focus {
        color: #FFFFFF; }
      .top-bar-section ul li > button.secondary {
        background-color: #e7e7e7;
        border-color: #b9b9b9;
        color: #333333; }
        .top-bar-section ul li > button.secondary:hover, .top-bar-section ul li > button.secondary:focus {
          background-color: #b9b9b9; }
        .top-bar-section ul li > button.secondary:hover, .top-bar-section ul li > button.secondary:focus {
          color: #333333; }
      .top-bar-section ul li > button.success {
        background-color: #43AC6A;
        border-color: #368a55;
        color: #FFFFFF; }
        .top-bar-section ul li > button.success:hover, .top-bar-section ul li > button.success:focus {
          background-color: #368a55; }
        .top-bar-section ul li > button.success:hover, .top-bar-section ul li > button.success:focus {
          color: #FFFFFF; }
      .top-bar-section ul li > button.alert {
        background-color: #f04124;
        border-color: #cf2a0e;
        color: #FFFFFF; }
        .top-bar-section ul li > button.alert:hover, .top-bar-section ul li > button.alert:focus {
          background-color: #cf2a0e; }
        .top-bar-section ul li > button.alert:hover, .top-bar-section ul li > button.alert:focus {
          color: #FFFFFF; }
      .top-bar-section ul li > button.warning {
        background-color: #f08a24;
        border-color: #cf6e0e;
        color: #FFFFFF; }
        .top-bar-section ul li > button.warning:hover, .top-bar-section ul li > button.warning:focus {
          background-color: #cf6e0e; }
        .top-bar-section ul li > button.warning:hover, .top-bar-section ul li > button.warning:focus {
          color: #FFFFFF; }
      .top-bar-section ul li > button.info {
        background-color: #a0d3e8;
        border-color: #61b6d9;
        color: #333333; }
        .top-bar-section ul li > button.info:hover, .top-bar-section ul li > button.info:focus {
          background-color: #61b6d9; }
        .top-bar-section ul li > button.info:hover, .top-bar-section ul li > button.info:focus {
          color: #FFFFFF; }
    .top-bar-section ul li:hover:not(.has-form) > a {
      background-color: #555555;
      color: #FFFFFF;
      background: #222222; }
    .top-bar-section ul li.active > a {
      background: #008CBA;
      color: #FFFFFF; }
      .top-bar-section ul li.active > a:hover {
        background: #0078a0;
        color: #FFFFFF; }
  .top-bar-section .has-form {
    padding: 0.9375rem; }
  .top-bar-section .has-dropdown {
    position: relative; }
    .top-bar-section .has-dropdown > a:after {
      border: inset 5px;
      content: "";
      display: block;
      height: 0;
      width: 0;
      border-color: transparent transparent transparent rgba(255, 255, 255, 0.4);
      border-left-style: solid;
      margin-right: 0.9375rem;
      margin-top: -4.5px;
      position: absolute;
      top: 50%;
      right: 0; }
    .top-bar-section .has-dropdown.moved {
      position: static; }
      .top-bar-section .has-dropdown.moved > .dropdown {
        position: static !important;
        height: auto;
        width: auto;
        overflow: visible;
        clip: auto;
        display: block;
        position: absolute !important;
        width: 100%; }
      .top-bar-section .has-dropdown.moved > a:after {
        display: none; }
  .top-bar-section .dropdown {
    clip: rect(1px, 1px, 1px, 1px);
    height: 1px;
    overflow: hidden;
    position: absolute !important;
    width: 1px;
    display: block;
    padding: 0;
    position: absolute;
    top: 0;
    z-index: 99;
    left: 100%; }
    .top-bar-section .dropdown li {
      height: auto;
      width: 100%; }
      .top-bar-section .dropdown li a {
        font-weight: normal;
        padding: 8px 0.9375rem; }
        .top-bar-section .dropdown li a.parent-link {
          font-weight: normal; }
      .top-bar-section .dropdown li.title h5, .top-bar-section .dropdown li.parent-link {
        margin-bottom: 0;
        margin-top: 0;
        font-size: 1.125rem; }
        .top-bar-section .dropdown li.title h5 a, .top-bar-section .dropdown li.parent-link a {
          color: #FFFFFF;
          display: block; }
          .top-bar-section .dropdown li.title h5 a:hover, .top-bar-section .dropdown li.parent-link a:hover {
            background: none; }
      .top-bar-section .dropdown li.has-form {
        padding: 8px 0.9375rem; }
      .top-bar-section .dropdown li .button,
      .top-bar-section .dropdown li button {
        top: auto; }
    .top-bar-section .dropdown label {
      color: #777777;
      font-size: 0.625rem;
      font-weight: bold;
      margin-bottom: 0;
      padding: 8px 0.9375rem 2px;
      text-transform: uppercase; }

.js-generated {
  display: block; }

@media only screen and (min-width: 40.0625em) {
  .top-bar {
    background: #333333;
    overflow: visible; }
    .top-bar:before, .top-bar:after {
      content: " ";
      display: table; }
    .top-bar:after {
      clear: both; }
    .top-bar .toggle-topbar {
      display: none; }
    .top-bar .title-area {
      float: left; }
    .top-bar .name h1 a,
    .top-bar .name h2 a,
    .top-bar .name h3 a,
    .top-bar .name h4 a,
    .top-bar .name h5 a,
    .top-bar .name h6 a {
      width: auto; }
    .top-bar input,
    .top-bar select,
    .top-bar .button,
    .top-bar button {
      font-size: 0.875rem;
      height: 1.75rem;
      position: relative;
      top: 0.53125rem; }
    .top-bar .has-form > .button,
    .top-bar .has-form > button {
      font-size: 0.875rem;
      height: 1.75rem;
      position: relative;
      top: 0.53125rem; }
    .top-bar.expanded {
      background: #333333; }

  .contain-to-grid .top-bar {
    margin: 0 auto;
    margin-bottom: 0;
    max-width: 62.5rem; }

  .top-bar-section {
    transition: none 0 0;
    left: 0 !important; }
    .top-bar-section ul {
      display: inline;
      height: auto !important;
      width: auto; }
      .top-bar-section ul li {
        float: left; }
        .top-bar-section ul li .js-generated {
          display: none; }
    .top-bar-section li.hover > a:not(.button) {
      background-color: #555555;
      background: #222222;
      color: #FFFFFF; }
    .top-bar-section li:not(.has-form) a:not(.button) {
      background: #333333;
      line-height: 2.8125rem;
      padding: 0 0.9375rem; }
      .top-bar-section li:not(.has-form) a:not(.button):hover {
        background-color: #555555;
        background: #222222; }
    .top-bar-section li.active:not(.has-form) a:not(.button) {
      background: #008CBA;
      color: #FFFFFF;
      line-height: 2.8125rem;
      padding: 0 0.9375rem; }
      .top-bar-section li.active:not(.has-form) a:not(.button):hover {
        background: #0078a0;
        color: #FFFFFF; }
    .top-bar-section .has-dropdown > a {
      padding-right: 2.1875rem !important; }
      .top-bar-section .has-dropdown > a:after {
        border: inset 5px;
        content: "";
        display: block;
        height: 0;
        width: 0;
        border-color: rgba(255, 255, 255, 0.4) transparent transparent transparent;
        border-top-style: solid;
        margin-top: -2.5px;
        top: 1.40625rem; }
    .top-bar-section .has-dropdown.moved {
      position: relative; }
      .top-bar-section .has-dropdown.moved > .dropdown {
        clip: rect(1px, 1px, 1px, 1px);
        height: 1px;
        overflow: hidden;
        position: absolute !important;
        width: 1px;
        display: block; }
    .top-bar-section .has-dropdown.hover > .dropdown, .top-bar-section .has-dropdown.not-click:hover > .dropdown {
      position: static !important;
      height: auto;
      width: auto;
      overflow: visible;
      clip: auto;
      display: block;
      position: absolute !important; }
    .top-bar-section .has-dropdown > a:focus + .dropdown {
      position: static !important;
      height: auto;
      width: auto;
      overflow: visible;
      clip: auto;
      display: block;
      position: absolute !important; }
    .top-bar-section .has-dropdown .dropdown li.has-dropdown > a:after {
      border: none;
      content: "\00bb";
      top: 0.1875rem;
      right: 5px; }
    .top-bar-section .dropdown {
      left: 0;
      background: transparent;
      min-width: 100%;
      top: auto; }
      .top-bar-section .dropdown li a {
        background: #333333;
        color: #FFFFFF;
        line-height: 2.8125rem;
        padding: 12px 0.9375rem;
        white-space: nowrap; }
      .top-bar-section .dropdown li:not(.has-form):not(.active) > a:not(.button) {
        background: #333333;
        color: #FFFFFF; }
      .top-bar-section .dropdown li:not(.has-form):not(.active):hover > a:not(.button) {
        background-color: #555555;
        color: #FFFFFF;
        background: #222222; }
      .top-bar-section .dropdown li label {
        background: #333333;
        white-space: nowrap; }
      .top-bar-section .dropdown li .dropdown {
        left: 100%;
        top: 0; }
    .top-bar-section > ul > .divider,
    .top-bar-section > ul > [role="separator"] {
      border-right: solid 1px #4e4e4e;
      border-bottom: none;
      border-top: none;
      clear: none;
      height: 2.8125rem;
      width: 0; }
    .top-bar-section .has-form {
      background: #333333;
      height: 2.8125rem;
      padding: 0 0.9375rem; }
    .top-bar-section .right li .dropdown {
      left: auto;
      right: 0; }
      .top-bar-section .right li .dropdown li .dropdown {
        right: 100%; }
    .top-bar-section .left li .dropdown {
      right: auto;
      left: 0; }
      .top-bar-section .left li .dropdown li .dropdown {
        left: 100%; }

  .no-js .top-bar-section ul li:hover > a {
    background-color: #555555;
    background: #222222;
    color: #FFFFFF; }
  .no-js .top-bar-section ul li:active > a {
    background: #008CBA;
    color: #FFFFFF; }
  .no-js .top-bar-section .has-dropdown:hover > .dropdown {
    position: static !important;
    height: auto;
    width: auto;
    overflow: visible;
    clip: auto;
    display: block;
    position: absolute !important; }
  .no-js .top-bar-section .has-dropdown > a:focus + .dropdown {
    position: static !important;
    height: auto;
    width: auto;
    overflow: visible;
    clip: auto;
    display: block;
    position: absolute !important; } }
.breadcrumbs {
  border-style: solid;
  border-width: 1px;
  display: block;
  list-style: none;
  margin-left: 0;
  overflow: hidden;
  padding: 0.5625rem 0.875rem 0.5625rem;
  background-color: #f4f4f4;
  border-color: gainsboro;
  border-radius: 3px; }
  .breadcrumbs > * {
    color: #008CBA;
    float: left;
    font-size: 0.6875rem;
    line-height: 0.6875rem;
    margin: 0;
    text-transform: uppercase; }
    .breadcrumbs > *:hover a, .breadcrumbs > *:focus a {
      text-decoration: underline; }
    .breadcrumbs > * a {
      color: #008CBA; }
    .breadcrumbs > *.current {
      color: #333333;
      cursor: default; }
      .breadcrumbs > *.current a {
        color: #333333;
        cursor: default; }
      .breadcrumbs > *.current:hover, .breadcrumbs > *.current:hover a, .breadcrumbs > *.current:focus, .breadcrumbs > *.current:focus a {
        text-decoration: none; }
    .breadcrumbs > *.unavailable {
      color: #999999; }
      .breadcrumbs > *.unavailable a {
        color: #999999; }
      .breadcrumbs > *.unavailable:hover, .breadcrumbs > *.unavailable:hover a, .breadcrumbs > *.unavailable:focus,
      .breadcrumbs > *.unavailable a:focus {
        color: #999999;
        cursor: not-allowed;
        text-decoration: none; }
    .breadcrumbs > *:before {
      color: #AAAAAA;
      content: "/";
      margin: 0 0.75rem;
      position: relative;
      top: 1px; }
    .breadcrumbs > *:first-child:before {
      content: " ";
      margin: 0; }

/* Accessibility - hides the forward slash */
[aria-label="breadcrumbs"] [aria-hidden="true"]:after {
  content: "/"; }

.alert-box {
  border-style: solid;
  border-width: 1px;
  display: block;
  font-size: 0.8125rem;
  font-weight: normal;
  margin-bottom: 1.25rem;
  padding: 0.875rem 1.5rem 0.875rem 0.875rem;
  position: relative;
  transition: opacity 300ms ease-out;
  background-color: #008CBA;
  border-color: #0078a0;
  color: #FFFFFF; }
  .alert-box .close {
    right: 0.25rem;
    background: inherit;
    color: #333333;
    font-size: 1.375rem;
    line-height: .9;
    margin-top: -0.6875rem;
    opacity: 0.3;
    padding: 0 6px 4px;
    position: absolute;
    top: 50%; }
    .alert-box .close:hover, .alert-box .close:focus {
      opacity: 0.5; }
  .alert-box.radius {
    border-radius: 3px; }
  .alert-box.round {
    border-radius: 1000px; }
  .alert-box.success {
    background-color: #43AC6A;
    border-color: #3a945b;
    color: #FFFFFF; }
  .alert-box.alert {
    background-color: #f04124;
    border-color: #de2d0f;
    color: #FFFFFF; }
  .alert-box.secondary {
    background-color: #e7e7e7;
    border-color: #c7c7c7;
    color: #4f4f4f; }
  .alert-box.warning {
    background-color: #f08a24;
    border-color: #de770f;
    color: #FFFFFF; }
  .alert-box.info {
    background-color: #a0d3e8;
    border-color: #74bfdd;
    color: #4f4f4f; }
  .alert-box.alert-close {
    opacity: 0; }

.inline-list {
  list-style: none;
  margin-top: 0;
  margin-bottom: 1.0625rem;
  margin-left: -1.375rem;
  margin-right: 0;
  overflow: hidden;
  padding: 0; }
  .inline-list > li {
    display: block;
    float: left;
    list-style: none;
    margin-left: 1.375rem; }
    .inline-list > li > * {
      display: block; }

.button-group {
  list-style: none;
  margin: 0;
  left: 0; }
  .button-group:before, .button-group:after {
    content: " ";
    display: table; }
  .button-group:after {
    clear: both; }
  .button-group.even-2 li {
    display: inline-block;
    margin: 0 -2px;
    width: 50%; }
    .button-group.even-2 li > button, .button-group.even-2 li .button {
      border-left: 1px solid;
      border-color: rgba(255, 255, 255, 0.5); }
    .button-group.even-2 li:first-child button, .button-group.even-2 li:first-child .button {
      border-left: 0; }
    .button-group.even-2 li button, .button-group.even-2 li .button {
      width: 100%; }
  .button-group.even-3 li {
    display: inline-block;
    margin: 0 -2px;
    width: 33.33333%; }
    .button-group.even-3 li > button, .button-group.even-3 li .button {
      border-left: 1px solid;
      border-color: rgba(255, 255, 255, 0.5); }
    .button-group.even-3 li:first-child button, .button-group.even-3 li:first-child .button {
      border-left: 0; }
    .button-group.even-3 li button, .button-group.even-3 li .button {
      width: 100%; }
  .button-group.even-4 li {
    display: inline-block;
    margin: 0 -2px;
    width: 25%; }
    .button-group.even-4 li > button, .button-group.even-4 li .button {
      border-left: 1px solid;
      border-color: rgba(255, 255, 255, 0.5); }
    .button-group.even-4 li:first-child button, .button-group.even-4 li:first-child .button {
      border-left: 0; }
    .button-group.even-4 li button, .button-group.even-4 li .button {
      width: 100%; }
  .button-group.even-5 li {
    display: inline-block;
    margin: 0 -2px;
    width: 20%; }
    .button-group.even-5 li > button, .button-group.even-5 li .button {
      border-left: 1px solid;
      border-color: rgba(255, 255, 255, 0.5); }
    .button-group.even-5 li:first-child button, .button-group.even-5 li:first-child .button {
      border-left: 0; }
    .button-group.even-5 li button, .button-group.even-5 li .button {
      width: 100%; }
  .button-group.even-6 li {
    display: inline-block;
    margin: 0 -2px;
    width: 16.66667%; }
    .button-group.even-6 li > button, .button-group.even-6 li .button {
      border-left: 1px solid;
      border-color: rgba(255, 255, 255, 0.5); }
    .button-group.even-6 li:first-child button, .button-group.even-6 li:first-child .button {
      border-left: 0; }
    .button-group.even-6 li button, .button-group.even-6 li .button {
      width: 100%; }
  .button-group.even-7 li {
    display: inline-block;
    margin: 0 -2px;
    width: 14.28571%; }
    .button-group.even-7 li > button, .button-group.even-7 li .button {
      border-left: 1px solid;
      border-color: rgba(255, 255, 255, 0.5); }
    .button-group.even-7 li:first-child button, .button-group.even-7 li:first-child .button {
      border-left: 0; }
    .button-group.even-7 li button, .button-group.even-7 li .button {
      width: 100%; }
  .button-group.even-8 li {
    display: inline-block;
    margin: 0 -2px;
    width: 12.5%; }
    .button-group.even-8 li > button, .button-group.even-8 li .button {
      border-left: 1px solid;
      border-color: rgba(255, 255, 255, 0.5); }
    .button-group.even-8 li:first-child button, .button-group.even-8 li:first-child .button {
      border-left: 0; }
    .button-group.even-8 li button, .button-group.even-8 li .button {
      width: 100%; }
  .button-group > li {
    display: inline-block;
    margin: 0 -2px; }
    .button-group > li > button, .button-group > li .button {
      border-left: 1px solid;
      border-color: rgba(255, 255, 255, 0.5); }
    .button-group > li:first-child button, .button-group > li:first-child .button {
      border-left: 0; }
  .button-group.stack > li {
    display: block;
    margin: 0;
    float: none; }
    .button-group.stack > li > button, .button-group.stack > li .button {
      border-left: 1px solid;
      border-color: rgba(255, 255, 255, 0.5); }
    .button-group.stack > li:first-child button, .button-group.stack > li:first-child .button {
      border-left: 0; }
    .button-group.stack > li > button, .button-group.stack > li .button {
      border-color: rgba(255, 255, 255, 0.5);
      border-left-width: 0;
      border-top: 1px solid;
      display: block;
      margin: 0; }
    .button-group.stack > li > button {
      width: 100%; }
    .button-group.stack > li:first-child button, .button-group.stack > li:first-child .button {
      border-top: 0; }
  .button-group.stack-for-small > li {
    display: inline-block;
    margin: 0 -2px; }
    .button-group.stack-for-small > li > button, .button-group.stack-for-small > li .button {
      border-left: 1px solid;
      border-color: rgba(255, 255, 255, 0.5); }
    .button-group.stack-for-small > li:first-child button, .button-group.stack-for-small > li:first-child .button {
      border-left: 0; }
    @media only screen and (max-width: 40em) {
      .button-group.stack-for-small > li {
        display: block;
        margin: 0;
        width: 100%; }
        .button-group.stack-for-small > li > button, .button-group.stack-for-small > li .button {
          border-left: 1px solid;
          border-color: rgba(255, 255, 255, 0.5); }
        .button-group.stack-for-small > li:first-child button, .button-group.stack-for-small > li:first-child .button {
          border-left: 0; }
        .button-group.stack-for-small > li > button, .button-group.stack-for-small > li .button {
          border-color: rgba(255, 255, 255, 0.5);
          border-left-width: 0;
          border-top: 1px solid;
          display: block;
          margin: 0; }
        .button-group.stack-for-small > li > button {
          width: 100%; }
        .button-group.stack-for-small > li:first-child button, .button-group.stack-for-small > li:first-child .button {
          border-top: 0; } }
  .button-group.radius > * {
    display: inline-block;
    margin: 0 -2px; }
    .button-group.radius > * > button, .button-group.radius > * .button {
      border-left: 1px solid;
      border-color: rgba(255, 255, 255, 0.5); }
    .button-group.radius > *:first-child button, .button-group.radius > *:first-child .button {
      border-left: 0; }
    .button-group.radius > *,
    .button-group.radius > * > a,
    .button-group.radius > * > button,
    .button-group.radius > * > .button {
      border-radius: 0; }
    .button-group.radius > *:first-child, .button-group.radius > *:first-child > a, .button-group.radius > *:first-child > button, .button-group.radius > *:first-child > .button {
      -webkit-border-bottom-left-radius: 3px;
      -webkit-border-top-left-radius: 3px;
      border-bottom-left-radius: 3px;
      border-top-left-radius: 3px; }
    .button-group.radius > *:last-child, .button-group.radius > *:last-child > a, .button-group.radius > *:last-child > button, .button-group.radius > *:last-child > .button {
      -webkit-border-bottom-right-radius: 3px;
      -webkit-border-top-right-radius: 3px;
      border-bottom-right-radius: 3px;
      border-top-right-radius: 3px; }
  .button-group.radius.stack > * {
    display: block;
    margin: 0; }
    .button-group.radius.stack > * > button, .button-group.radius.stack > * .button {
      border-left: 1px solid;
      border-color: rgba(255, 255, 255, 0.5); }
    .button-group.radius.stack > *:first-child button, .button-group.radius.stack > *:first-child .button {
      border-left: 0; }
    .button-group.radius.stack > * > button, .button-group.radius.stack > * .button {
      border-color: rgba(255, 255, 255, 0.5);
      border-left-width: 0;
      border-top: 1px solid;
      display: block;
      margin: 0; }
    .button-group.radius.stack > * > button {
      width: 100%; }
    .button-group.radius.stack > *:first-child button, .button-group.radius.stack > *:first-child .button {
      border-top: 0; }
    .button-group.radius.stack > *,
    .button-group.radius.stack > * > a,
    .button-group.radius.stack > * > button,
    .button-group.radius.stack > * > .button {
      border-radius: 0; }
    .button-group.radius.stack > *:first-child, .button-group.radius.stack > *:first-child > a, .button-group.radius.stack > *:first-child > button, .button-group.radius.stack > *:first-child > .button {
      -webkit-top-left-radius: 3px;
      -webkit-top-right-radius: 3px;
      border-top-left-radius: 3px;
      border-top-right-radius: 3px; }
    .button-group.radius.stack > *:last-child, .button-group.radius.stack > *:last-child > a, .button-group.radius.stack > *:last-child > button, .button-group.radius.stack > *:last-child > .button {
      -webkit-bottom-left-radius: 3px;
      -webkit-bottom-right-radius: 3px;
      border-bottom-left-radius: 3px;
      border-bottom-right-radius: 3px; }
  @media only screen and (min-width: 40.0625em) {
    .button-group.radius.stack-for-small > * {
      display: inline-block;
      margin: 0 -2px; }
      .button-group.radius.stack-for-small > * > button, .button-group.radius.stack-for-small > * .button {
        border-left: 1px solid;
        border-color: rgba(255, 255, 255, 0.5); }
      .button-group.radius.stack-for-small > *:first-child button, .button-group.radius.stack-for-small > *:first-child .button {
        border-left: 0; }
      .button-group.radius.stack-for-small > *,
      .button-group.radius.stack-for-small > * > a,
      .button-group.radius.stack-for-small > * > button,
      .button-group.radius.stack-for-small > * > .button {
        border-radius: 0; }
      .button-group.radius.stack-for-small > *:first-child, .button-group.radius.stack-for-small > *:first-child > a, .button-group.radius.stack-for-small > *:first-child > button, .button-group.radius.stack-for-small > *:first-child > .button {
        -webkit-border-bottom-left-radius: 3px;
        -webkit-border-top-left-radius: 3px;
        border-bottom-left-radius: 3px;
        border-top-left-radius: 3px; }
      .button-group.radius.stack-for-small > *:last-child, .button-group.radius.stack-for-small > *:last-child > a, .button-group.radius.stack-for-small > *:last-child > button, .button-group.radius.stack-for-small > *:last-child > .button {
        -webkit-border-bottom-right-radius: 3px;
        -webkit-border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
        border-top-right-radius: 3px; } }
  @media only screen and (max-width: 40em) {
    .button-group.radius.stack-for-small > * {
      display: block;
      margin: 0; }
      .button-group.radius.stack-for-small > * > button, .button-group.radius.stack-for-small > * .button {
        border-left: 1px solid;
        border-color: rgba(255, 255, 255, 0.5); }
      .button-group.radius.stack-for-small > *:first-child button, .button-group.radius.stack-for-small > *:first-child .button {
        border-left: 0; }
      .button-group.radius.stack-for-small > * > button, .button-group.radius.stack-for-small > * .button {
        border-color: rgba(255, 255, 255, 0.5);
        border-left-width: 0;
        border-top: 1px solid;
        display: block;
        margin: 0; }
      .button-group.radius.stack-for-small > * > button {
        width: 100%; }
      .button-group.radius.stack-for-small > *:first-child button, .button-group.radius.stack-for-small > *:first-child .button {
        border-top: 0; }
      .button-group.radius.stack-for-small > *,
      .button-group.radius.stack-for-small > * > a,
      .button-group.radius.stack-for-small > * > button,
      .button-group.radius.stack-for-small > * > .button {
        border-radius: 0; }
      .button-group.radius.stack-for-small > *:first-child, .button-group.radius.stack-for-small > *:first-child > a, .button-group.radius.stack-for-small > *:first-child > button, .button-group.radius.stack-for-small > *:first-child > .button {
        -webkit-top-left-radius: 3px;
        -webkit-top-right-radius: 3px;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px; }
      .button-group.radius.stack-for-small > *:last-child, .button-group.radius.stack-for-small > *:last-child > a, .button-group.radius.stack-for-small > *:last-child > button, .button-group.radius.stack-for-small > *:last-child > .button {
        -webkit-bottom-left-radius: 3px;
        -webkit-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
        border-bottom-right-radius: 3px; } }
  .button-group.round > * {
    display: inline-block;
    margin: 0 -2px; }
    .button-group.round > * > button, .button-group.round > * .button {
      border-left: 1px solid;
      border-color: rgba(255, 255, 255, 0.5); }
    .button-group.round > *:first-child button, .button-group.round > *:first-child .button {
      border-left: 0; }
    .button-group.round > *,
    .button-group.round > * > a,
    .button-group.round > * > button,
    .button-group.round > * > .button {
      border-radius: 0; }
    .button-group.round > *:first-child, .button-group.round > *:first-child > a, .button-group.round > *:first-child > button, .button-group.round > *:first-child > .button {
      -webkit-border-bottom-left-radius: 1000px;
      -webkit-border-top-left-radius: 1000px;
      border-bottom-left-radius: 1000px;
      border-top-left-radius: 1000px; }
    .button-group.round > *:last-child, .button-group.round > *:last-child > a, .button-group.round > *:last-child > button, .button-group.round > *:last-child > .button {
      -webkit-border-bottom-right-radius: 1000px;
      -webkit-border-top-right-radius: 1000px;
      border-bottom-right-radius: 1000px;
      border-top-right-radius: 1000px; }
  .button-group.round.stack > * {
    display: block;
    margin: 0; }
    .button-group.round.stack > * > button, .button-group.round.stack > * .button {
      border-left: 1px solid;
      border-color: rgba(255, 255, 255, 0.5); }
    .button-group.round.stack > *:first-child button, .button-group.round.stack > *:first-child .button {
      border-left: 0; }
    .button-group.round.stack > * > button, .button-group.round.stack > * .button {
      border-color: rgba(255, 255, 255, 0.5);
      border-left-width: 0;
      border-top: 1px solid;
      display: block;
      margin: 0; }
    .button-group.round.stack > * > button {
      width: 100%; }
    .button-group.round.stack > *:first-child button, .button-group.round.stack > *:first-child .button {
      border-top: 0; }
    .button-group.round.stack > *,
    .button-group.round.stack > * > a,
    .button-group.round.stack > * > button,
    .button-group.round.stack > * > .button {
      border-radius: 0; }
    .button-group.round.stack > *:first-child, .button-group.round.stack > *:first-child > a, .button-group.round.stack > *:first-child > button, .button-group.round.stack > *:first-child > .button {
      -webkit-top-left-radius: 1rem;
      -webkit-top-right-radius: 1rem;
      border-top-left-radius: 1rem;
      border-top-right-radius: 1rem; }
    .button-group.round.stack > *:last-child, .button-group.round.stack > *:last-child > a, .button-group.round.stack > *:last-child > button, .button-group.round.stack > *:last-child > .button {
      -webkit-bottom-left-radius: 1rem;
      -webkit-bottom-right-radius: 1rem;
      border-bottom-left-radius: 1rem;
      border-bottom-right-radius: 1rem; }
  @media only screen and (min-width: 40.0625em) {
    .button-group.round.stack-for-small > * {
      display: inline-block;
      margin: 0 -2px; }
      .button-group.round.stack-for-small > * > button, .button-group.round.stack-for-small > * .button {
        border-left: 1px solid;
        border-color: rgba(255, 255, 255, 0.5); }
      .button-group.round.stack-for-small > *:first-child button, .button-group.round.stack-for-small > *:first-child .button {
        border-left: 0; }
      .button-group.round.stack-for-small > *,
      .button-group.round.stack-for-small > * > a,
      .button-group.round.stack-for-small > * > button,
      .button-group.round.stack-for-small > * > .button {
        border-radius: 0; }
      .button-group.round.stack-for-small > *:first-child, .button-group.round.stack-for-small > *:first-child > a, .button-group.round.stack-for-small > *:first-child > button, .button-group.round.stack-for-small > *:first-child > .button {
        -webkit-border-bottom-left-radius: 1000px;
        -webkit-border-top-left-radius: 1000px;
        border-bottom-left-radius: 1000px;
        border-top-left-radius: 1000px; }
      .button-group.round.stack-for-small > *:last-child, .button-group.round.stack-for-small > *:last-child > a, .button-group.round.stack-for-small > *:last-child > button, .button-group.round.stack-for-small > *:last-child > .button {
        -webkit-border-bottom-right-radius: 1000px;
        -webkit-border-top-right-radius: 1000px;
        border-bottom-right-radius: 1000px;
        border-top-right-radius: 1000px; } }
  @media only screen and (max-width: 40em) {
    .button-group.round.stack-for-small > * {
      display: block;
      margin: 0; }
      .button-group.round.stack-for-small > * > button, .button-group.round.stack-for-small > * .button {
        border-left: 1px solid;
        border-color: rgba(255, 255, 255, 0.5); }
      .button-group.round.stack-for-small > *:first-child button, .button-group.round.stack-for-small > *:first-child .button {
        border-left: 0; }
      .button-group.round.stack-for-small > * > button, .button-group.round.stack-for-small > * .button {
        border-color: rgba(255, 255, 255, 0.5);
        border-left-width: 0;
        border-top: 1px solid;
        display: block;
        margin: 0; }
      .button-group.round.stack-for-small > * > button {
        width: 100%; }
      .button-group.round.stack-for-small > *:first-child button, .button-group.round.stack-for-small > *:first-child .button {
        border-top: 0; }
      .button-group.round.stack-for-small > *,
      .button-group.round.stack-for-small > * > a,
      .button-group.round.stack-for-small > * > button,
      .button-group.round.stack-for-small > * > .button {
        border-radius: 0; }
      .button-group.round.stack-for-small > *:first-child, .button-group.round.stack-for-small > *:first-child > a, .button-group.round.stack-for-small > *:first-child > button, .button-group.round.stack-for-small > *:first-child > .button {
        -webkit-top-left-radius: 1rem;
        -webkit-top-right-radius: 1rem;
        border-top-left-radius: 1rem;
        border-top-right-radius: 1rem; }
      .button-group.round.stack-for-small > *:last-child, .button-group.round.stack-for-small > *:last-child > a, .button-group.round.stack-for-small > *:last-child > button, .button-group.round.stack-for-small > *:last-child > .button {
        -webkit-bottom-left-radius: 1rem;
        -webkit-bottom-right-radius: 1rem;
        border-bottom-left-radius: 1rem;
        border-bottom-right-radius: 1rem; } }

.button-bar:before, .button-bar:after {
  content: " ";
  display: table; }
.button-bar:after {
  clear: both; }
.button-bar .button-group {
  float: left;
  margin-right: 0.625rem; }
  .button-bar .button-group div {
    overflow: hidden; }

/* Panels */
.panel {
  border-style: solid;
  border-width: 1px;
  border-color: #d8d8d8;
  margin-bottom: 1.25rem;
  padding: 1.25rem;
  background: #f2f2f2;
  color: #333333; }
  .panel > :first-child {
    margin-top: 0; }
  .panel > :last-child {
    margin-bottom: 0; }
  .panel h1, .panel h2, .panel h3, .panel h4, .panel h5, .panel h6, .panel p, .panel li, .panel dl {
    color: #333333; }
  .panel h1, .panel h2, .panel h3, .panel h4, .panel h5, .panel h6 {
    line-height: 1;
    margin-bottom: 0.625rem; }
    .panel h1.subheader, .panel h2.subheader, .panel h3.subheader, .panel h4.subheader, .panel h5.subheader, .panel h6.subheader {
      line-height: 1.4; }
  .panel.callout {
    border-style: solid;
    border-width: 1px;
    border-color: #d8d8d8;
    margin-bottom: 1.25rem;
    padding: 1.25rem;
    background: #ecfaff;
    color: #333333; }
    .panel.callout > :first-child {
      margin-top: 0; }
    .panel.callout > :last-child {
      margin-bottom: 0; }
    .panel.callout h1, .panel.callout h2, .panel.callout h3, .panel.callout h4, .panel.callout h5, .panel.callout h6, .panel.callout p, .panel.callout li, .panel.callout dl {
      color: #333333; }
    .panel.callout h1, .panel.callout h2, .panel.callout h3, .panel.callout h4, .panel.callout h5, .panel.callout h6 {
      line-height: 1;
      margin-bottom: 0.625rem; }
      .panel.callout h1.subheader, .panel.callout h2.subheader, .panel.callout h3.subheader, .panel.callout h4.subheader, .panel.callout h5.subheader, .panel.callout h6.subheader {
        line-height: 1.4; }
    .panel.callout a:not(.button) {
      color: #008CBA; }
      .panel.callout a:not(.button):hover, .panel.callout a:not(.button):focus {
        color: #0078a0; }
  .panel.radius {
    border-radius: 3px; }

.dropdown.button, button.dropdown {
  position: relative;
  padding-right: 3.5625rem; }
  .dropdown.button::after, button.dropdown::after {
    border-color: #FFFFFF transparent transparent transparent;
    border-style: solid;
    content: "";
    display: block;
    height: 0;
    position: absolute;
    top: 50%;
    width: 0; }
  .dropdown.button::after, button.dropdown::after {
    border-width: 0.375rem;
    right: 1.40625rem;
    margin-top: -0.15625rem; }
  .dropdown.button::after, button.dropdown::after {
    border-color: #FFFFFF transparent transparent transparent; }
  .dropdown.button.tiny, button.dropdown.tiny {
    padding-right: 2.625rem; }
    .dropdown.button.tiny:after, button.dropdown.tiny:after {
      border-width: 0.375rem;
      right: 1.125rem;
      margin-top: -0.125rem; }
    .dropdown.button.tiny::after, button.dropdown.tiny::after {
      border-color: #FFFFFF transparent transparent transparent; }
  .dropdown.button.small, button.dropdown.small {
    padding-right: 3.0625rem; }
    .dropdown.button.small::after, button.dropdown.small::after {
      border-width: 0.4375rem;
      right: 1.3125rem;
      margin-top: -0.15625rem; }
    .dropdown.button.small::after, button.dropdown.small::after {
      border-color: #FFFFFF transparent transparent transparent; }
  .dropdown.button.large, button.dropdown.large {
    padding-right: 3.625rem; }
    .dropdown.button.large::after, button.dropdown.large::after {
      border-width: 0.3125rem;
      right: 1.71875rem;
      margin-top: -0.15625rem; }
    .dropdown.button.large::after, button.dropdown.large::after {
      border-color: #FFFFFF transparent transparent transparent; }
  .dropdown.button.secondary:after, button.dropdown.secondary:after {
    border-color: #333333 transparent transparent transparent; }

/* Image Thumbnails */
.th {
  border: solid 4px #FFFFFF;
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2);
  display: inline-block;
  line-height: 0;
  max-width: 100%;
  transition: all 200ms ease-out; }
  .th:hover, .th:focus {
    box-shadow: 0 0 6px 1px rgba(0, 140, 186, 0.5); }
  .th.radius {
    border-radius: 3px; }

/* Pricing Tables */
.pricing-table {
  border: solid 1px #DDDDDD;
  margin-left: 0;
  margin-bottom: 1.25rem; }
  .pricing-table * {
    list-style: none;
    line-height: 1; }
  .pricing-table .title {
    background-color: #333333;
    color: #EEEEEE;
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    font-size: 1rem;
    font-weight: normal;
    padding: 0.9375rem 1.25rem;
    text-align: center; }
  .pricing-table .price {
    background-color: #F6F6F6;
    color: #333333;
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    font-size: 2rem;
    font-weight: normal;
    padding: 0.9375rem 1.25rem;
    text-align: center; }
  .pricing-table .description {
    background-color: #FFFFFF;
    border-bottom: dotted 1px #DDDDDD;
    color: #777777;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.4;
    padding: 0.9375rem;
    text-align: center; }
  .pricing-table .bullet-item {
    background-color: #FFFFFF;
    border-bottom: dotted 1px #DDDDDD;
    color: #333333;
    font-size: 0.875rem;
    font-weight: normal;
    padding: 0.9375rem;
    text-align: center; }
  .pricing-table .cta-button {
    background-color: #FFFFFF;
    padding: 1.25rem 1.25rem 0;
    text-align: center; }

@-webkit-keyframes rotate {
  from {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }
@keyframes rotate {
  from {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    transform: rotate(0deg); }
  to {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    transform: rotate(360deg); } }
/* Orbit Graceful Loading */
.slideshow-wrapper {
  position: relative; }
  .slideshow-wrapper ul {
    list-style-type: none;
    margin: 0; }
    .slideshow-wrapper ul li,
    .slideshow-wrapper ul li .orbit-caption {
      display: none; }
    .slideshow-wrapper ul li:first-child {
      display: block; }
  .slideshow-wrapper .orbit-container {
    background-color: transparent; }
    .slideshow-wrapper .orbit-container li {
      display: block; }
      .slideshow-wrapper .orbit-container li .orbit-caption {
        display: block; }
    .slideshow-wrapper .orbit-container .orbit-bullets li {
      display: inline-block; }
  .slideshow-wrapper .preloader {
    border-radius: 1000px;
    animation-duration: 1.5s;
    animation-iteration-count: infinite;
    animation-name: rotate;
    animation-timing-function: linear;
    border-color: #555555 #FFFFFF;
    border: solid 3px;
    display: block;
    height: 40px;
    left: 50%;
    margin-left: -20px;
    margin-top: -20px;
    position: absolute;
    top: 50%;
    width: 40px; }

.orbit-container {
  background: none;
  overflow: hidden;
  position: relative;
  width: 100%; }
  .orbit-container .orbit-slides-container {
    list-style: none;
    margin: 0;
    padding: 0;
    position: relative;
    -webkit-transform: translateZ(0);
    -moz-transform: translateZ(0);
    -ms-transform: translateZ(0);
    -o-transform: translateZ(0);
    transform: translateZ(0); }
    .orbit-container .orbit-slides-container img {
      display: block;
      max-width: 100%; }
    .orbit-container .orbit-slides-container > * {
      position: absolute;
      top: 0;
      width: 100%;
      margin-left: 100%; }
      .orbit-container .orbit-slides-container > *:first-child {
        margin-left: 0; }
      .orbit-container .orbit-slides-container > * .orbit-caption {
        bottom: 0;
        position: absolute;
        background-color: rgba(51, 51, 51, 0.8);
        color: #FFFFFF;
        font-size: 0.875rem;
        padding: 0.625rem 0.875rem;
        width: 100%; }
  .orbit-container .orbit-slide-number {
    left: 10px;
    background: transparent;
    color: #FFFFFF;
    font-size: 12px;
    position: absolute;
    top: 10px;
    z-index: 10; }
    .orbit-container .orbit-slide-number span {
      font-weight: 700;
      padding: 0.3125rem; }
  .orbit-container .orbit-timer {
    position: absolute;
    top: 12px;
    right: 10px;
    height: 6px;
    width: 100px;
    z-index: 10; }
    .orbit-container .orbit-timer .orbit-progress {
      height: 3px;
      background-color: rgba(255, 255, 255, 0.3);
      display: block;
      width: 0;
      position: relative;
      right: 20px;
      top: 5px; }
    .orbit-container .orbit-timer > span {
      border: solid 4px #FFFFFF;
      border-bottom: none;
      border-top: none;
      display: none;
      height: 14px;
      position: absolute;
      top: 0;
      width: 11px;
      right: 0; }
    .orbit-container .orbit-timer.paused > span {
      top: 0;
      width: 11px;
      height: 14px;
      border: inset 8px;
      border-left-style: solid;
      border-color: transparent;
      border-left-color: #FFFFFF;
      right: -4px; }
      .orbit-container .orbit-timer.paused > span.dark {
        border-left-color: #333333; }
  .orbit-container:hover .orbit-timer > span {
    display: block; }
  .orbit-container .orbit-prev,
  .orbit-container .orbit-next {
    background-color: transparent;
    color: white;
    height: 60px;
    line-height: 50px;
    margin-top: -25px;
    position: absolute;
    text-indent: -9999px !important;
    top: 45%;
    width: 36px;
    z-index: 10; }
    .orbit-container .orbit-prev:hover,
    .orbit-container .orbit-next:hover {
      background-color: rgba(0, 0, 0, 0.3); }
    .orbit-container .orbit-prev > span,
    .orbit-container .orbit-next > span {
      border: inset 10px;
      display: block;
      height: 0;
      margin-top: -10px;
      position: absolute;
      top: 50%;
      width: 0; }
  .orbit-container .orbit-prev {
    left: 0; }
    .orbit-container .orbit-prev > span {
      border-right-style: solid;
      border-color: transparent;
      border-right-color: #FFFFFF; }
    .orbit-container .orbit-prev:hover > span {
      border-right-color: #FFFFFF; }
  .orbit-container .orbit-next {
    right: 0; }
    .orbit-container .orbit-next > span {
      border-color: transparent;
      border-left-style: solid;
      border-left-color: #FFFFFF;
      left: 50%;
      margin-left: -4px; }
    .orbit-container .orbit-next:hover > span {
      border-left-color: #FFFFFF; }

.orbit-bullets-container {
  text-align: center; }

.orbit-bullets {
  display: block;
  float: none;
  margin: 0 auto 30px auto;
  overflow: hidden;
  position: relative;
  text-align: center;
  top: 10px; }
  .orbit-bullets li {
    background: #CCCCCC;
    cursor: pointer;
    display: inline-block;
    float: none;
    height: 0.5625rem;
    margin-right: 6px;
    width: 0.5625rem;
    border-radius: 1000px; }
    .orbit-bullets li.active {
      background: #999999; }
    .orbit-bullets li:last-child {
      margin-right: 0; }

.touch .orbit-container .orbit-prev,
.touch .orbit-container .orbit-next {
  display: none; }
.touch .orbit-bullets {
  display: none; }

@media only screen and (min-width: 40.0625em) {
  .touch .orbit-container .orbit-prev,
  .touch .orbit-container .orbit-next {
    display: inherit; }
  .touch .orbit-bullets {
    display: block; } }
@media only screen and (max-width: 40em) {
  .orbit-stack-on-small .orbit-slides-container {
    height: auto !important; }
  .orbit-stack-on-small .orbit-slides-container > * {
    margin: 0  !important;
    opacity: 1 !important;
    position: relative; }
  .orbit-stack-on-small .orbit-slide-number {
    display: none; }

  .orbit-timer {
    display: none; }

  .orbit-next, .orbit-prev {
    display: none; }

  .orbit-bullets {
    display: none; } }
[data-magellan-expedition], [data-magellan-expedition-clone] {
  background: #FFFFFF;
  min-width: 100%;
  padding: 10px;
  z-index: 50; }
  [data-magellan-expedition] .sub-nav, [data-magellan-expedition-clone] .sub-nav {
    margin-bottom: 0; }
    [data-magellan-expedition] .sub-nav dd, [data-magellan-expedition-clone] .sub-nav dd {
      margin-bottom: 0; }
    [data-magellan-expedition] .sub-nav a, [data-magellan-expedition-clone] .sub-nav a {
      line-height: 1.8em; }

.icon-bar {
  display: inline-block;
  font-size: 0;
  width: 100%;
  background: #333333; }
  .icon-bar > * {
    display: block;
    float: left;
    font-size: 1rem;
    margin: 0 auto;
    padding: 1.25rem;
    text-align: center;
    width: 25%; }
    .icon-bar > * i, .icon-bar > * img {
      display: block;
      margin: 0 auto; }
      .icon-bar > * i + label, .icon-bar > * img + label {
        margin-top: .0625rem; }
    .icon-bar > * i {
      font-size: 1.875rem;
      vertical-align: middle; }
    .icon-bar > * img {
      height: 1.875rem;
      width: 1.875rem; }
  .icon-bar.label-right > * i, .icon-bar.label-right > * img {
    display: inline-block;
    margin: 0 .0625rem 0 0; }
    .icon-bar.label-right > * i + label, .icon-bar.label-right > * img + label {
      margin-top: 0; }
  .icon-bar.label-right > * label {
    display: inline-block; }
  .icon-bar.vertical.label-right > * {
    text-align: left; }
  .icon-bar.vertical, .icon-bar.small-vertical {
    height: 100%;
    width: auto; }
    .icon-bar.vertical .item, .icon-bar.small-vertical .item {
      float: none;
      margin: auto;
      width: auto; }
  @media only screen and (min-width: 40.0625em) {
    .icon-bar.medium-vertical {
      height: 100%;
      width: auto; }
      .icon-bar.medium-vertical .item {
        float: none;
        margin: auto;
        width: auto; } }
  @media only screen and (min-width: 64.0625em) {
    .icon-bar.large-vertical {
      height: 100%;
      width: auto; }
      .icon-bar.large-vertical .item {
        float: none;
        margin: auto;
        width: auto; } }
  .icon-bar > * {
    font-size: 1rem;
    padding: 1.25rem; }
    .icon-bar > * i + label, .icon-bar > * img + label {
      margin-top: .0625rem;
      font-size: 1rem; }
    .icon-bar > * i {
      font-size: 1.875rem; }
    .icon-bar > * img {
      height: 1.875rem;
      width: 1.875rem; }
  .icon-bar > * label {
    color: #FFFFFF; }
  .icon-bar > * i {
    color: #FFFFFF; }
  .icon-bar > a:hover {
    background: #008CBA; }
    .icon-bar > a:hover label {
      color: #FFFFFF; }
    .icon-bar > a:hover i {
      color: #FFFFFF; }
  .icon-bar > a.active {
    background: #008CBA; }
    .icon-bar > a.active label {
      color: #FFFFFF; }
    .icon-bar > a.active i {
      color: #FFFFFF; }
  .icon-bar .item.disabled {
    cursor: not-allowed;
    opacity: 0.7;
    pointer-events: none; }
    .icon-bar .item.disabled > * {
      opacity: 0.7;
      cursor: not-allowed; }
  .icon-bar.two-up .item {
    width: 50%; }
  .icon-bar.two-up.vertical .item, .icon-bar.two-up.small-vertical .item {
    width: auto; }
  @media only screen and (min-width: 40.0625em) {
    .icon-bar.two-up.medium-vertical .item {
      width: auto; } }
  @media only screen and (min-width: 64.0625em) {
    .icon-bar.two-up.large-vertical .item {
      width: auto; } }
  .icon-bar.three-up .item {
    width: 33.3333%; }
  .icon-bar.three-up.vertical .item, .icon-bar.three-up.small-vertical .item {
    width: auto; }
  @media only screen and (min-width: 40.0625em) {
    .icon-bar.three-up.medium-vertical .item {
      width: auto; } }
  @media only screen and (min-width: 64.0625em) {
    .icon-bar.three-up.large-vertical .item {
      width: auto; } }
  .icon-bar.four-up .item {
    width: 25%; }
  .icon-bar.four-up.vertical .item, .icon-bar.four-up.small-vertical .item {
    width: auto; }
  @media only screen and (min-width: 40.0625em) {
    .icon-bar.four-up.medium-vertical .item {
      width: auto; } }
  @media only screen and (min-width: 64.0625em) {
    .icon-bar.four-up.large-vertical .item {
      width: auto; } }
  .icon-bar.five-up .item {
    width: 20%; }
  .icon-bar.five-up.vertical .item, .icon-bar.five-up.small-vertical .item {
    width: auto; }
  @media only screen and (min-width: 40.0625em) {
    .icon-bar.five-up.medium-vertical .item {
      width: auto; } }
  @media only screen and (min-width: 64.0625em) {
    .icon-bar.five-up.large-vertical .item {
      width: auto; } }
  .icon-bar.six-up .item {
    width: 16.66667%; }
  .icon-bar.six-up.vertical .item, .icon-bar.six-up.small-vertical .item {
    width: auto; }
  @media only screen and (min-width: 40.0625em) {
    .icon-bar.six-up.medium-vertical .item {
      width: auto; } }
  @media only screen and (min-width: 64.0625em) {
    .icon-bar.six-up.large-vertical .item {
      width: auto; } }
  .icon-bar.seven-up .item {
    width: 14.28571%; }
  .icon-bar.seven-up.vertical .item, .icon-bar.seven-up.small-vertical .item {
    width: auto; }
  @media only screen and (min-width: 40.0625em) {
    .icon-bar.seven-up.medium-vertical .item {
      width: auto; } }
  @media only screen and (min-width: 64.0625em) {
    .icon-bar.seven-up.large-vertical .item {
      width: auto; } }
  .icon-bar.eight-up .item {
    width: 12.5%; }
  .icon-bar.eight-up.vertical .item, .icon-bar.eight-up.small-vertical .item {
    width: auto; }
  @media only screen and (min-width: 40.0625em) {
    .icon-bar.eight-up.medium-vertical .item {
      width: auto; } }
  @media only screen and (min-width: 64.0625em) {
    .icon-bar.eight-up.large-vertical .item {
      width: auto; } }

.icon-bar.two-up .item {
  width: 50%; }
.icon-bar.two-up.vertical .item, .icon-bar.two-up.small-vertical .item {
  width: auto; }
@media only screen and (min-width: 40.0625em) {
  .icon-bar.two-up.medium-vertical .item {
    width: auto; } }
@media only screen and (min-width: 64.0625em) {
  .icon-bar.two-up.large-vertical .item {
    width: auto; } }
.icon-bar.three-up .item {
  width: 33.3333%; }
.icon-bar.three-up.vertical .item, .icon-bar.three-up.small-vertical .item {
  width: auto; }
@media only screen and (min-width: 40.0625em) {
  .icon-bar.three-up.medium-vertical .item {
    width: auto; } }
@media only screen and (min-width: 64.0625em) {
  .icon-bar.three-up.large-vertical .item {
    width: auto; } }
.icon-bar.four-up .item {
  width: 25%; }
.icon-bar.four-up.vertical .item, .icon-bar.four-up.small-vertical .item {
  width: auto; }
@media only screen and (min-width: 40.0625em) {
  .icon-bar.four-up.medium-vertical .item {
    width: auto; } }
@media only screen and (min-width: 64.0625em) {
  .icon-bar.four-up.large-vertical .item {
    width: auto; } }
.icon-bar.five-up .item {
  width: 20%; }
.icon-bar.five-up.vertical .item, .icon-bar.five-up.small-vertical .item {
  width: auto; }
@media only screen and (min-width: 40.0625em) {
  .icon-bar.five-up.medium-vertical .item {
    width: auto; } }
@media only screen and (min-width: 64.0625em) {
  .icon-bar.five-up.large-vertical .item {
    width: auto; } }
.icon-bar.six-up .item {
  width: 16.66667%; }
.icon-bar.six-up.vertical .item, .icon-bar.six-up.small-vertical .item {
  width: auto; }
@media only screen and (min-width: 40.0625em) {
  .icon-bar.six-up.medium-vertical .item {
    width: auto; } }
@media only screen and (min-width: 64.0625em) {
  .icon-bar.six-up.large-vertical .item {
    width: auto; } }
.icon-bar.seven-up .item {
  width: 14.28571%; }
.icon-bar.seven-up.vertical .item, .icon-bar.seven-up.small-vertical .item {
  width: auto; }
@media only screen and (min-width: 40.0625em) {
  .icon-bar.seven-up.medium-vertical .item {
    width: auto; } }
@media only screen and (min-width: 64.0625em) {
  .icon-bar.seven-up.large-vertical .item {
    width: auto; } }
.icon-bar.eight-up .item {
  width: 12.5%; }
.icon-bar.eight-up.vertical .item, .icon-bar.eight-up.small-vertical .item {
  width: auto; }
@media only screen and (min-width: 40.0625em) {
  .icon-bar.eight-up.medium-vertical .item {
    width: auto; } }
@media only screen and (min-width: 64.0625em) {
  .icon-bar.eight-up.large-vertical .item {
    width: auto; } }

.tabs {
  margin-bottom: 0 !important;
  margin-left: 0; }
  .tabs:before, .tabs:after {
    content: " ";
    display: table; }
  .tabs:after {
    clear: both; }
  .tabs dd,
  .tabs .tab-title {
    float: left;
    list-style: none;
    margin-bottom: 0 !important;
    position: relative; }
    .tabs dd > a,
    .tabs .tab-title > a {
      display: block;
      background-color: #EFEFEF;
      color: #222222;
      font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
      font-size: 1rem;
      padding: 1rem 2rem; }
      .tabs dd > a:hover,
      .tabs .tab-title > a:hover {
        background-color: #e1e1e1; }
    .tabs dd.active > a,
    .tabs .tab-title.active > a {
      background-color: #FFFFFF;
      color: #222222; }
  .tabs.radius dd:first-child a,
  .tabs.radius .tab:first-child a {
    -webkit-border-bottom-left-radius: 3px;
    -webkit-border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top-left-radius: 3px; }
  .tabs.radius dd:last-child a,
  .tabs.radius .tab:last-child a {
    -webkit-border-bottom-right-radius: 3px;
    -webkit-border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px; }
  .tabs.vertical dd,
  .tabs.vertical .tab-title {
    position: inherit;
    float: none;
    display: block;
    top: auto; }

.tabs-content {
  margin-bottom: 1.5rem;
  width: 100%; }
  .tabs-content:before, .tabs-content:after {
    content: " ";
    display: table; }
  .tabs-content:after {
    clear: both; }
  .tabs-content > .content {
    display: none;
    float: left;
    padding: 0.9375rem 0;
    width: 100%; }
    .tabs-content > .content.active {
      display: block;
      float: none; }
    .tabs-content > .content.contained {
      padding: 0.9375rem; }
  .tabs-content.vertical {
    display: block; }
    .tabs-content.vertical > .content {
      padding: 0 0.9375rem; }

@media only screen and (min-width: 40.0625em) {
  .tabs.vertical {
    float: left;
    margin: 0;
    margin-bottom: 1.25rem !important;
    max-width: 20%;
    width: 20%; }

  .tabs-content.vertical {
    float: left;
    margin-left: -1px;
    max-width: 80%;
    padding-left: 1rem;
    width: 80%; } }
.no-js .tabs-content > .content {
  display: block;
  float: none; }

ul.pagination {
  display: block;
  margin-left: -0.3125rem;
  min-height: 1.5rem; }
  ul.pagination li {
    color: #222222;
    font-size: 0.875rem;
    height: 1.5rem;
    margin-left: 0.3125rem; }
    ul.pagination li a, ul.pagination li button {
      border-radius: 3px;
      transition: background-color 300ms ease-out;
      background: none;
      color: #999999;
      display: block;
      font-size: 1em;
      font-weight: normal;
      line-height: inherit;
      padding: 0.0625rem 0.625rem 0.0625rem; }
    ul.pagination li:hover a,
    ul.pagination li a:focus, ul.pagination li:hover button,
    ul.pagination li button:focus {
      background: #e6e6e6; }
    ul.pagination li.unavailable a, ul.pagination li.unavailable button {
      cursor: default;
      color: #999999;
      pointer-events: none; }
    ul.pagination li.unavailable:hover a, ul.pagination li.unavailable a:focus, ul.pagination li.unavailable:hover button, ul.pagination li.unavailable button:focus {
      background: transparent; }
    ul.pagination li.current a, ul.pagination li.current button {
      background: #008CBA;
      color: #FFFFFF;
      cursor: default;
      font-weight: bold; }
      ul.pagination li.current a:hover, ul.pagination li.current a:focus, ul.pagination li.current button:hover, ul.pagination li.current button:focus {
        background: #008CBA; }
  ul.pagination li {
    display: block;
    float: left; }

/* Pagination centred wrapper */
.pagination-centered {
  text-align: center; }
  .pagination-centered ul.pagination li {
    display: inline-block;
    float: none; }

.side-nav {
  display: block;
  font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
  list-style-position: outside;
  list-style-type: none;
  margin: 0;
  padding: 0.875rem 0; }
  .side-nav li {
    font-size: 0.875rem;
    font-weight: normal;
    margin: 0 0 0.4375rem 0; }
    .side-nav li a:not(.button) {
      color: #008CBA;
      display: block;
      margin: 0;
      padding: 0.4375rem 0.875rem; }
      .side-nav li a:not(.button):hover, .side-nav li a:not(.button):focus {
        background: rgba(0, 0, 0, 0.025);
        color: #1cc7ff; }
      .side-nav li a:not(.button):active {
        color: #1cc7ff; }
    .side-nav li.active > a:first-child:not(.button) {
      color: #1cc7ff;
      font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
      font-weight: normal; }
    .side-nav li.divider {
      border-top: 1px solid;
      height: 0;
      list-style: none;
      padding: 0;
      border-top-color: #e6e6e6; }
    .side-nav li.heading {
      color: #008CBA;
      font-size: 0.875rem;
      font-weight: bold;
      text-transform: uppercase; }

.accordion {
  margin-bottom: 0;
  margin-left: 0; }
  .accordion:before, .accordion:after {
    content: " ";
    display: table; }
  .accordion:after {
    clear: both; }
  .accordion .accordion-navigation, .accordion dd {
    display: block;
    margin-bottom: 0 !important; }
    .accordion .accordion-navigation.active > a, .accordion dd.active > a {
      background: #e8e8e8;
      color: #222222; }
    .accordion .accordion-navigation > a, .accordion dd > a {
      background: #EFEFEF;
      color: #222222;
      display: block;
      font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
      font-size: 1rem;
      padding: 1rem; }
      .accordion .accordion-navigation > a:hover, .accordion dd > a:hover {
        background: #e3e3e3; }
    .accordion .accordion-navigation > .content, .accordion dd > .content {
      display: none;
      padding: 0.9375rem; }
      .accordion .accordion-navigation > .content.active, .accordion dd > .content.active {
        background: #FFFFFF;
        display: block; }

.text-left {
  text-align: left !important; }

.text-right {
  text-align: right !important; }

.text-center {
  text-align: center !important; }

.text-justify {
  text-align: justify !important; }

@media only screen and (max-width: 40em) {
  .small-only-text-left {
    text-align: left !important; }

  .small-only-text-right {
    text-align: right !important; }

  .small-only-text-center {
    text-align: center !important; }

  .small-only-text-justify {
    text-align: justify !important; } }
@media only screen {
  .small-text-left {
    text-align: left !important; }

  .small-text-right {
    text-align: right !important; }

  .small-text-center {
    text-align: center !important; }

  .small-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 40.0625em) and (max-width: 64em) {
  .medium-only-text-left {
    text-align: left !important; }

  .medium-only-text-right {
    text-align: right !important; }

  .medium-only-text-center {
    text-align: center !important; }

  .medium-only-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 40.0625em) {
  .medium-text-left {
    text-align: left !important; }

  .medium-text-right {
    text-align: right !important; }

  .medium-text-center {
    text-align: center !important; }

  .medium-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 64.0625em) and (max-width: 90em) {
  .large-only-text-left {
    text-align: left !important; }

  .large-only-text-right {
    text-align: right !important; }

  .large-only-text-center {
    text-align: center !important; }

  .large-only-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 64.0625em) {
  .large-text-left {
    text-align: left !important; }

  .large-text-right {
    text-align: right !important; }

  .large-text-center {
    text-align: center !important; }

  .large-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 90.0625em) and (max-width: 120em) {
  .xlarge-only-text-left {
    text-align: left !important; }

  .xlarge-only-text-right {
    text-align: right !important; }

  .xlarge-only-text-center {
    text-align: center !important; }

  .xlarge-only-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 90.0625em) {
  .xlarge-text-left {
    text-align: left !important; }

  .xlarge-text-right {
    text-align: right !important; }

  .xlarge-text-center {
    text-align: center !important; }

  .xlarge-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 120.0625em) and (max-width: 6249999.9375em) {
  .xxlarge-only-text-left {
    text-align: left !important; }

  .xxlarge-only-text-right {
    text-align: right !important; }

  .xxlarge-only-text-center {
    text-align: center !important; }

  .xxlarge-only-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 120.0625em) {
  .xxlarge-text-left {
    text-align: left !important; }

  .xxlarge-text-right {
    text-align: right !important; }

  .xxlarge-text-center {
    text-align: center !important; }

  .xxlarge-text-justify {
    text-align: justify !important; } }
/* Typography resets */
div,
dl,
dt,
dd,
ul,
ol,
li,
h1,
h2,
h3,
h4,
h5,
h6,
pre,
form,
p,
blockquote,
th,
td {
  margin: 0;
  padding: 0; }

/* Default Link Styles */
a {
  color: #008CBA;
  line-height: inherit;
  text-decoration: none; }
  a:hover, a:focus {
    color: #0078a0; }
  a img {
    border: none; }

/* Default paragraph styles */
p {
  font-family: inherit;
  font-size: 1rem;
  font-weight: normal;
  line-height: 1.6;
  margin-bottom: 1.25rem;
  text-rendering: optimizeLegibility; }
  p.lead {
    font-size: 1.21875rem;
    line-height: 1.6; }
  p aside {
    font-size: 0.875rem;
    font-style: italic;
    line-height: 1.35; }

/* Default header styles */
h1, h2, h3, h4, h5, h6 {
  color: #222222;
  font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
  font-style: normal;
  font-weight: normal;
  line-height: 1.4;
  margin-bottom: 0.5rem;
  margin-top: 0.2rem;
  text-rendering: optimizeLegibility; }
  h1 small, h2 small, h3 small, h4 small, h5 small, h6 small {
    color: #6f6f6f;
    font-size: 60%;
    line-height: 0; }

h1 {
  font-size: 2.125rem; }

h2 {
  font-size: 1.6875rem; }

h3 {
  font-size: 1.375rem; }

h4 {
  font-size: 1.125rem; }

h5 {
  font-size: 1.125rem; }

h6 {
  font-size: 1rem; }

.subheader {
  line-height: 1.4;
  color: #6f6f6f;
  font-weight: normal;
  margin-top: 0.2rem;
  margin-bottom: 0.5rem; }

hr {
  border: solid #DDDDDD;
  border-width: 1px 0 0;
  clear: both;
  height: 0;
  margin: 1.25rem 0 1.1875rem; }

/* Helpful Typography Defaults */
em,
i {
  font-style: italic;
  line-height: inherit; }

strong,
b {
  font-weight: bold;
  line-height: inherit; }

small {
  font-size: 60%;
  line-height: inherit; }

code {
  background-color: #f8f8f8;
  border-color: #dfdfdf;
  border-style: solid;
  border-width: 1px;
  color: #333333;
  font-family: Consolas, "Liberation Mono", Courier, monospace;
  font-weight: normal;
  padding: 0.125rem 0.3125rem 0.0625rem; }

/* Lists */
ul,
ol,
dl {
  font-family: inherit;
  font-size: 1rem;
  line-height: 1.6;
  list-style-position: outside;
  margin-bottom: 1.25rem; }

ul {
  margin-left: 1.1rem; }

/* Unordered Lists */
ul li ul,
ul li ol {
  margin-left: 1.25rem;
  margin-bottom: 0; }
ul.square li ul, ul.circle li ul, ul.disc li ul {
  list-style: inherit; }
ul.square {
  list-style-type: square;
  margin-left: 1.1rem; }
ul.circle {
  list-style-type: circle;
  margin-left: 1.1rem; }
ul.disc {
  list-style-type: disc;
  margin-left: 1.1rem; }

/* Ordered Lists */
ol {
  margin-left: 1.4rem; }
  ol li ul,
  ol li ol {
    margin-left: 1.25rem;
    margin-bottom: 0; }

.no-bullet {
  list-style-type: none;
  margin-left: 0; }
  .no-bullet li ul,
  .no-bullet li ol {
    margin-left: 1.25rem;
    margin-bottom: 0;
    list-style: none; }

/* Definition Lists */
dl dt {
  margin-bottom: 0.3rem;
  font-weight: bold; }
dl dd {
  margin-bottom: 0.75rem; }

/* Abbreviations */
abbr,
acronym {
  text-transform: uppercase;
  font-size: 90%;
  color: #222;
  cursor: help; }

abbr {
  text-transform: none; }
  abbr[title] {
    border-bottom: 1px dotted #DDDDDD; }

/* Blockquotes */
blockquote {
  margin: 0 0 1.25rem;
  padding: 0.5625rem 1.25rem 0 1.1875rem;
  border-left: 1px solid #DDDDDD; }
  blockquote cite {
    display: block;
    font-size: 0.8125rem;
    color: #555555; }
    blockquote cite:before {
      content: "\2014 \0020"; }
    blockquote cite a,
    blockquote cite a:visited {
      color: #555555; }

blockquote,
blockquote p {
  line-height: 1.6;
  color: #6f6f6f; }

/* Microformats */
.vcard {
  display: inline-block;
  margin: 0 0 1.25rem 0;
  border: 1px solid #DDDDDD;
  padding: 0.625rem 0.75rem; }
  .vcard li {
    margin: 0;
    display: block; }
  .vcard .fn {
    font-weight: bold;
    font-size: 0.9375rem; }

.vevent .summary {
  font-weight: bold; }
.vevent abbr {
  cursor: default;
  text-decoration: none;
  font-weight: bold;
  border: none;
  padding: 0 0.0625rem; }

@media only screen and (min-width: 40.0625em) {
  h1, h2, h3, h4, h5, h6 {
    line-height: 1.4; }

  h1 {
    font-size: 2.75rem; }

  h2 {
    font-size: 2.3125rem; }

  h3 {
    font-size: 1.6875rem; }

  h4 {
    font-size: 1.4375rem; }

  h5 {
    font-size: 1.125rem; }

  h6 {
    font-size: 1rem; } }
/*
 * Print styles.
 *
 * Inlined to avoid required HTTP connection: www.phpied.com/delay-loading-your-print-css/
 * Credit to Paul Irish and HTML5 Boilerplate (html5boilerplate.com)
*/
@media print {
  * {
    background: transparent !important;
    color: #000000 !important;
    /* Black prints faster: h5bp.com/s */
    box-shadow: none !important;
    text-shadow: none !important; }

  a,
  a:visited {
    text-decoration: underline; }

  a[href]:after {
    content: " (" attr(href) ")"; }

  abbr[title]:after {
    content: " (" attr(title) ")"; }

  .ir a:after,
  a[href^="javascript:"]:after,
  a[href^="#"]:after {
    content: ""; }

  pre,
  blockquote {
    border: 1px solid #999999;
    page-break-inside: avoid; }

  thead {
    display: table-header-group;
    /* h5bp.com/t */ }

  tr,
  img {
    page-break-inside: avoid; }

  img {
    max-width: 100% !important; }

  @page {
    margin: 0.34in; }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3; }

  h2,
  h3 {
    page-break-after: avoid; } }
.split.button {
  position: relative;
  padding-right: 5.0625rem; }
  .split.button span {
    display: block;
    height: 100%;
    position: absolute;
    right: 0;
    top: 0;
    border-left: solid 1px; }
    .split.button span:after {
      position: absolute;
      content: "";
      width: 0;
      height: 0;
      display: block;
      border-style: inset;
      top: 50%;
      left: 50%; }
    .split.button span:active {
      background-color: rgba(0, 0, 0, 0.1); }
  .split.button span {
    border-left-color: rgba(255, 255, 255, 0.5); }
  .split.button span {
    width: 3.09375rem; }
    .split.button span:after {
      border-top-style: solid;
      border-width: 0.375rem;
      margin-left: -0.375rem;
      top: 48%; }
  .split.button span:after {
    border-color: #FFFFFF transparent transparent transparent; }
  .split.button.secondary span {
    border-left-color: rgba(255, 255, 255, 0.5); }
  .split.button.secondary span:after {
    border-color: #FFFFFF transparent transparent transparent; }
  .split.button.alert span {
    border-left-color: rgba(255, 255, 255, 0.5); }
  .split.button.success span {
    border-left-color: rgba(255, 255, 255, 0.5); }
  .split.button.tiny {
    padding-right: 3.75rem; }
    .split.button.tiny span {
      width: 2.25rem; }
      .split.button.tiny span:after {
        border-top-style: solid;
        border-width: 0.375rem;
        margin-left: -0.375rem;
        top: 48%; }
  .split.button.small {
    padding-right: 4.375rem; }
    .split.button.small span {
      width: 2.625rem; }
      .split.button.small span:after {
        border-top-style: solid;
        border-width: 0.4375rem;
        margin-left: -0.375rem;
        top: 48%; }
  .split.button.large {
    padding-right: 5.5rem; }
    .split.button.large span {
      width: 3.4375rem; }
      .split.button.large span:after {
        border-top-style: solid;
        border-width: 0.3125rem;
        margin-left: -0.375rem;
        top: 48%; }
  .split.button.expand {
    padding-left: 2rem; }
  .split.button.secondary span:after {
    border-color: #333333 transparent transparent transparent; }
  .split.button.radius span {
    -webkit-border-bottom-right-radius: 3px;
    -webkit-border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px; }
  .split.button.round span {
    -webkit-border-bottom-right-radius: 1000px;
    -webkit-border-top-right-radius: 1000px;
    border-bottom-right-radius: 1000px;
    border-top-right-radius: 1000px; }
  .split.button.no-pip span:before {
    border-style: none; }
  .split.button.no-pip span:after {
    border-style: none; }
  .split.button.no-pip span > i {
    display: block;
    left: 50%;
    margin-left: -0.28889em;
    margin-top: -0.48889em;
    position: absolute;
    top: 50%; }

.reveal-modal-bg {
  background: #000000;
  background: rgba(0, 0, 0, 0.45);
  bottom: 0;
  display: none;
  left: 0;
  position: fixed;
  right: 0;
  top: 0;
  z-index: 1004;
  left: 0; }

.reveal-modal {
  border-radius: 3px;
  display: none;
  position: absolute;
  top: 0;
  visibility: hidden;
  width: 100%;
  z-index: 1005;
  left: 0;
  background-color: #FFFFFF;
  padding: 1.875rem;
  border: solid 1px #666666;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.4); }
  @media only screen and (max-width: 40em) {
    .reveal-modal {
      min-height: 100vh; } }
  .reveal-modal .column, .reveal-modal .columns {
    min-width: 0; }
  .reveal-modal > :first-child {
    margin-top: 0; }
  .reveal-modal > :last-child {
    margin-bottom: 0; }
  @media only screen and (min-width: 40.0625em) {
    .reveal-modal {
      left: 0;
      margin: 0 auto;
      max-width: 62.5rem;
      right: 0;
      width: 80%; } }
  @media only screen and (min-width: 40.0625em) {
    .reveal-modal {
      top: 6.25rem; } }
  .reveal-modal.radius {
    box-shadow: none;
    border-radius: 3px; }
  .reveal-modal.round {
    box-shadow: none;
    border-radius: 1000px; }
  .reveal-modal.collapse {
    padding: 0;
    box-shadow: none; }
  @media only screen and (min-width: 40.0625em) {
    .reveal-modal.tiny {
      left: 0;
      margin: 0 auto;
      max-width: 62.5rem;
      right: 0;
      width: 30%; } }
  @media only screen and (min-width: 40.0625em) {
    .reveal-modal.small {
      left: 0;
      margin: 0 auto;
      max-width: 62.5rem;
      right: 0;
      width: 40%; } }
  @media only screen and (min-width: 40.0625em) {
    .reveal-modal.medium {
      left: 0;
      margin: 0 auto;
      max-width: 62.5rem;
      right: 0;
      width: 60%; } }
  @media only screen and (min-width: 40.0625em) {
    .reveal-modal.large {
      left: 0;
      margin: 0 auto;
      max-width: 62.5rem;
      right: 0;
      width: 70%; } }
  @media only screen and (min-width: 40.0625em) {
    .reveal-modal.xlarge {
      left: 0;
      margin: 0 auto;
      max-width: 62.5rem;
      right: 0;
      width: 95%; } }
  .reveal-modal.full {
    height: 100vh;
    height: 100%;
    left: 0;
    margin-left: 0 !important;
    max-width: none !important;
    min-height: 100vh;
    top: 0; }
    @media only screen and (min-width: 40.0625em) {
      .reveal-modal.full {
        left: 0;
        margin: 0 auto;
        max-width: 62.5rem;
        right: 0;
        width: 100%; } }
  .reveal-modal.toback {
    z-index: 1003; }
  .reveal-modal .close-reveal-modal {
    color: #AAAAAA;
    cursor: pointer;
    font-size: 2.5rem;
    font-weight: bold;
    line-height: 1;
    position: absolute;
    top: 0.625rem;
    right: 1.375rem; }

/* Tooltips */
.has-tip {
  border-bottom: dotted 1px #CCCCCC;
  color: #333333;
  cursor: help;
  font-weight: bold; }
  .has-tip:hover, .has-tip:focus {
    border-bottom: dotted 1px #003f54;
    color: #008CBA; }
  .has-tip.tip-left, .has-tip.tip-right {
    float: none !important; }

.tooltip {
  background: #333333;
  color: #FFFFFF;
  display: none;
  font-size: 0.875rem;
  font-weight: normal;
  line-height: 1.3;
  max-width: 300px;
  padding: 0.75rem;
  position: absolute;
  width: 100%;
  z-index: 1006;
  left: 50%; }
  .tooltip > .nub {
    border: solid 5px;
    border-color: transparent transparent #333333 transparent;
    display: block;
    height: 0;
    pointer-events: none;
    position: absolute;
    top: -10px;
    width: 0;
    left: 5px; }
    .tooltip > .nub.rtl {
      left: auto;
      right: 5px; }
  .tooltip.radius {
    border-radius: 3px; }
  .tooltip.round {
    border-radius: 1000px; }
    .tooltip.round > .nub {
      left: 2rem; }
  .tooltip.opened {
    border-bottom: dotted 1px #003f54 !important;
    color: #008CBA !important; }

.tap-to-close {
  color: #777777;
  display: block;
  font-size: 0.625rem;
  font-weight: normal; }

@media only screen {
  .tooltip > .nub {
    border-color: transparent transparent #333333 transparent;
    top: -10px; }
  .tooltip.tip-top > .nub {
    border-color: #333333 transparent transparent transparent;
    bottom: -10px;
    top: auto; }
  .tooltip.tip-left, .tooltip.tip-right {
    float: none !important; }
  .tooltip.tip-left > .nub {
    border-color: transparent transparent transparent #333333;
    left: auto;
    margin-top: -5px;
    right: -10px;
    top: 50%; }
  .tooltip.tip-right > .nub {
    border-color: transparent #333333 transparent transparent;
    left: -10px;
    margin-top: -5px;
    right: auto;
    top: 50%; } }
/* Clearing Styles */
.clearing-thumbs, [data-clearing] {
  list-style: none;
  margin-left: 0;
  margin-bottom: 0; }
  .clearing-thumbs:before, .clearing-thumbs:after, [data-clearing]:before, [data-clearing]:after {
    content: " ";
    display: table; }
  .clearing-thumbs:after, [data-clearing]:after {
    clear: both; }
  .clearing-thumbs li, [data-clearing] li {
    float: left;
    margin-right: 10px; }
  .clearing-thumbs[class*="block-grid-"] li, [data-clearing][class*="block-grid-"] li {
    margin-right: 0; }

.clearing-blackout {
  background: #333333;
  height: 100%;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 998;
  left: 0; }
  .clearing-blackout .clearing-close {
    display: block; }

.clearing-container {
  height: 100%;
  margin: 0;
  overflow: hidden;
  position: relative;
  z-index: 998; }

.clearing-touch-label {
  color: #AAAAAA;
  font-size: .6em;
  left: 50%;
  position: absolute;
  top: 50%; }

.visible-img {
  height: 95%;
  position: relative; }
  .visible-img img {
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translateY(-50%) translateX(-50%);
    -moz-transform: translateY(-50%) translateX(-50%);
    -ms-transform: translateY(-50%) translateX(-50%);
    -o-transform: translateY(-50%) translateX(-50%);
    transform: translateY(-50%) translateX(-50%);
    max-height: 100%;
    max-width: 100%; }

.clearing-caption {
  background: #333333;
  bottom: 0;
  color: #CCCCCC;
  font-size: 0.875em;
  line-height: 1.3;
  margin-bottom: 0;
  padding: 10px 30px 20px;
  position: absolute;
  text-align: center;
  width: 100%;
  left: 0; }

.clearing-close {
  color: #CCCCCC;
  display: none;
  font-size: 30px;
  line-height: 1;
  padding-left: 20px;
  padding-top: 10px;
  z-index: 999; }
  .clearing-close:hover, .clearing-close:focus {
    color: #CCCCCC; }

.clearing-assembled .clearing-container {
  height: 100%; }
  .clearing-assembled .clearing-container .carousel > ul {
    display: none; }

.clearing-feature li {
  display: none; }
  .clearing-feature li.clearing-featured-img {
    display: block; }

@media only screen and (min-width: 40.0625em) {
  .clearing-main-prev,
  .clearing-main-next {
    height: 100%;
    position: absolute;
    top: 0;
    width: 40px; }
    .clearing-main-prev > span,
    .clearing-main-next > span {
      border: solid 12px;
      display: block;
      height: 0;
      position: absolute;
      top: 50%;
      width: 0; }
      .clearing-main-prev > span:hover,
      .clearing-main-next > span:hover {
        opacity: .8; }

  .clearing-main-prev {
    left: 0; }
    .clearing-main-prev > span {
      left: 5px;
      border-color: transparent;
      border-right-color: #CCCCCC; }

  .clearing-main-next {
    right: 0; }
    .clearing-main-next > span {
      border-color: transparent;
      border-left-color: #CCCCCC; }

  .clearing-main-prev.disabled,
  .clearing-main-next.disabled {
    opacity: .3; }

  .clearing-assembled .clearing-container .carousel {
    background: rgba(51, 51, 51, 0.8);
    height: 120px;
    margin-top: 10px;
    text-align: center; }
    .clearing-assembled .clearing-container .carousel > ul {
      display: inline-block;
      z-index: 999;
      height: 100%;
      position: relative;
      float: none; }
      .clearing-assembled .clearing-container .carousel > ul li {
        clear: none;
        cursor: pointer;
        display: block;
        float: left;
        margin-right: 0;
        min-height: inherit;
        opacity: .4;
        overflow: hidden;
        padding: 0;
        position: relative;
        width: 120px; }
        .clearing-assembled .clearing-container .carousel > ul li.fix-height img {
          height: 100%;
          max-width: none; }
        .clearing-assembled .clearing-container .carousel > ul li a.th {
          border: none;
          box-shadow: none;
          display: block; }
        .clearing-assembled .clearing-container .carousel > ul li img {
          cursor: pointer !important;
          width: 100% !important; }
        .clearing-assembled .clearing-container .carousel > ul li.visible {
          opacity: 1; }
        .clearing-assembled .clearing-container .carousel > ul li:hover {
          opacity: .8; }
  .clearing-assembled .clearing-container .visible-img {
    background: #333333;
    height: 85%;
    overflow: hidden; }

  .clearing-close {
    padding-left: 0;
    padding-top: 0;
    position: absolute;
    top: 10px;
    right: 20px; } }
/* Progress Bar */
.progress {
  background-color: #F6F6F6;
  border: 1px solid white;
  height: 1.5625rem;
  margin-bottom: 0.625rem;
  padding: 0.125rem; }
  .progress .meter {
    background: #008CBA;
    display: block;
    height: 100%;
    float: left;
    width: 0%; }
    .progress .meter.secondary {
      background: #e7e7e7;
      display: block;
      height: 100%;
      float: left;
      width: 0%; }
    .progress .meter.success {
      background: #43AC6A;
      display: block;
      height: 100%;
      float: left;
      width: 0%; }
    .progress .meter.alert {
      background: #f04124;
      display: block;
      height: 100%;
      float: left;
      width: 0%; }
  .progress.secondary .meter {
    background: #e7e7e7;
    display: block;
    height: 100%;
    float: left;
    width: 0%; }
  .progress.success .meter {
    background: #43AC6A;
    display: block;
    height: 100%;
    float: left;
    width: 0%; }
  .progress.alert .meter {
    background: #f04124;
    display: block;
    height: 100%;
    float: left;
    width: 0%; }
  .progress.radius {
    border-radius: 3px; }
    .progress.radius .meter {
      border-radius: 2px; }
  .progress.round {
    border-radius: 1000px; }
    .progress.round .meter {
      border-radius: 999px; }

.sub-nav {
  display: block;
  margin: -0.25rem 0 1.125rem;
  overflow: hidden;
  padding-top: 0.25rem;
  width: auto; }
  .sub-nav dt {
    text-transform: uppercase; }
  .sub-nav dt,
  .sub-nav dd,
  .sub-nav li {
    color: #999999;
    float: left;
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    font-size: 0.875rem;
    font-weight: normal;
    margin-left: 1rem;
    margin-bottom: 0; }
    .sub-nav dt a,
    .sub-nav dd a,
    .sub-nav li a {
      color: #999999;
      padding: 0.1875rem 1rem;
      text-decoration: none; }
      .sub-nav dt a:hover,
      .sub-nav dd a:hover,
      .sub-nav li a:hover {
        color: #737373; }
    .sub-nav dt.active a,
    .sub-nav dd.active a,
    .sub-nav li.active a {
      border-radius: 3px;
      background: #008CBA;
      color: #FFFFFF;
      cursor: default;
      font-weight: normal;
      padding: 0.1875rem 1rem; }
      .sub-nav dt.active a:hover,
      .sub-nav dd.active a:hover,
      .sub-nav li.active a:hover {
        background: #0078a0; }

/* Foundation Joyride */
.joyride-list {
  display: none; }

/* Default styles for the container */
.joyride-tip-guide {
  background: #333333;
  color: #FFFFFF;
  display: none;
  font-family: inherit;
  font-weight: normal;
  position: absolute;
  top: 0;
  width: 95%;
  z-index: 103;
  left: 2.5%; }

.lt-ie9 .joyride-tip-guide {
  margin-left: -400px;
  max-width: 800px;
  left: 50%; }

.joyride-content-wrapper {
  padding: 1.125rem 1.25rem 1.5rem;
  width: 100%; }
  .joyride-content-wrapper .button {
    margin-bottom: 0 !important; }
  .joyride-content-wrapper .joyride-prev-tip {
    margin-right: 10px; }

/* Add a little css triangle pip, older browser just miss out on the fanciness of it */
.joyride-tip-guide .joyride-nub {
  border: 10px solid #333333;
  display: block;
  height: 0;
  position: absolute;
  width: 0;
  left: 22px; }
  .joyride-tip-guide .joyride-nub.top {
    border-color: #333333;
    border-top-color: transparent !important;
    border-top-style: solid;
    border-left-color: transparent !important;
    border-right-color: transparent !important;
    top: -20px; }
  .joyride-tip-guide .joyride-nub.bottom {
    border-color: #333333 !important;
    border-bottom-color: transparent !important;
    border-bottom-style: solid;
    border-left-color: transparent !important;
    border-right-color: transparent !important;
    bottom: -20px; }
  .joyride-tip-guide .joyride-nub.right {
    right: -20px; }
  .joyride-tip-guide .joyride-nub.left {
    left: -20px; }

/* Typography */
.joyride-tip-guide h1,
.joyride-tip-guide h2,
.joyride-tip-guide h3,
.joyride-tip-guide h4,
.joyride-tip-guide h5,
.joyride-tip-guide h6 {
  color: #FFFFFF;
  font-weight: bold;
  line-height: 1.25;
  margin: 0; }

.joyride-tip-guide p {
  font-size: 0.875rem;
  line-height: 1.3;
  margin: 0 0 1.125rem 0; }

.joyride-timer-indicator-wrap {
  border: solid 1px #555555;
  bottom: 1rem;
  height: 3px;
  position: absolute;
  width: 50px;
  right: 1.0625rem; }

.joyride-timer-indicator {
  background: #666666;
  display: block;
  height: inherit;
  width: 0; }

.joyride-close-tip {
  color: #777777 !important;
  font-size: 24px;
  font-weight: normal;
  line-height: .5 !important;
  position: absolute;
  text-decoration: none;
  top: 10px;
  right: 12px; }
  .joyride-close-tip:hover, .joyride-close-tip:focus {
    color: #EEEEEE !important; }

.joyride-modal-bg {
  background: rgba(0, 0, 0, 0.5);
  cursor: pointer;
  display: none;
  height: 100%;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 100;
  left: 0; }

.joyride-expose-wrapper {
  background-color: #FFFFFF;
  border-radius: 3px;
  box-shadow: 0 0 15px #FFFFFF;
  position: absolute;
  z-index: 102; }

.joyride-expose-cover {
  background: transparent;
  border-radius: 3px;
  left: 0;
  position: absolute;
  top: 0;
  z-index: 9999; }

/* Styles for screens that are at least 768px; */
@media only screen {
  .joyride-tip-guide {
    width: 300px;
    left: inherit; }
    .joyride-tip-guide .joyride-nub.bottom {
      border-color: #333333 !important;
      border-bottom-color: transparent !important;
      border-left-color: transparent !important;
      border-right-color: transparent !important;
      bottom: -20px; }
    .joyride-tip-guide .joyride-nub.right {
      border-color: #333333 !important;
      border-right-color: transparent !important;
      border-bottom-color: transparent !important;
      border-top-color: transparent !important;
      left: auto;
      right: -20px;
      top: 22px; }
    .joyride-tip-guide .joyride-nub.left {
      border-color: #333333 !important;
      border-bottom-color: transparent !important;
      border-left-color: transparent !important;
      border-top-color: transparent !important;
      left: -20px;
      right: auto;
      top: 22px; } }
.label {
  display: inline-block;
  font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
  font-weight: normal;
  line-height: 1;
  margin-bottom: auto;
  position: relative;
  text-align: center;
  text-decoration: none;
  white-space: nowrap;
  padding: 0.25rem 0.5rem 0.25rem;
  font-size: 0.6875rem;
  background-color: #008CBA;
  color: #FFFFFF; }
  .label.radius {
    border-radius: 3px; }
  .label.round {
    border-radius: 1000px; }
  .label.alert {
    background-color: #f04124;
    color: #FFFFFF; }
  .label.warning {
    background-color: #f08a24;
    color: #FFFFFF; }
  .label.success {
    background-color: #43AC6A;
    color: #FFFFFF; }
  .label.secondary {
    background-color: #e7e7e7;
    color: #333333; }
  .label.info {
    background-color: #a0d3e8;
    color: #333333; }

.off-canvas-wrap {
  -webkit-backface-visibility: hidden;
  position: relative;
  width: 100%;
  overflow: hidden; }
  .off-canvas-wrap.move-right, .off-canvas-wrap.move-left, .off-canvas-wrap.move-bottom, .off-canvas-wrap.move-top {
    min-height: 100%;
    -webkit-overflow-scrolling: touch; }

.inner-wrap {
  position: relative;
  width: 100%;
  -webkit-transition: -webkit-transform 500ms ease;
  -moz-transition: -moz-transform 500ms ease;
  -ms-transition: -ms-transform 500ms ease;
  -o-transition: -o-transform 500ms ease;
  transition: transform 500ms ease; }
  .inner-wrap:before, .inner-wrap:after {
    content: " ";
    display: table; }
  .inner-wrap:after {
    clear: both; }

.tab-bar {
  -webkit-backface-visibility: hidden;
  background: #333333;
  color: #FFFFFF;
  height: 2.8125rem;
  line-height: 2.8125rem;
  position: relative; }
  .tab-bar h1, .tab-bar h2, .tab-bar h3, .tab-bar h4, .tab-bar h5, .tab-bar h6 {
    color: #FFFFFF;
    font-weight: bold;
    line-height: 2.8125rem;
    margin: 0; }
  .tab-bar h1, .tab-bar h2, .tab-bar h3, .tab-bar h4 {
    font-size: 1.125rem; }

.left-small {
  height: 2.8125rem;
  position: absolute;
  top: 0;
  width: 2.8125rem;
  border-right: solid 1px #1a1a1a;
  left: 0; }

.right-small {
  height: 2.8125rem;
  position: absolute;
  top: 0;
  width: 2.8125rem;
  border-left: solid 1px #1a1a1a;
  right: 0; }

.tab-bar-section {
  height: 2.8125rem;
  padding: 0 0.625rem;
  position: absolute;
  text-align: center;
  top: 0; }
  .tab-bar-section.left {
    text-align: left; }
  .tab-bar-section.right {
    text-align: right; }
  .tab-bar-section.left {
    left: 0;
    right: 2.8125rem; }
  .tab-bar-section.right {
    left: 2.8125rem;
    right: 0; }
  .tab-bar-section.middle {
    left: 2.8125rem;
    right: 2.8125rem; }

.tab-bar .menu-icon {
  color: #FFFFFF;
  display: block;
  height: 2.8125rem;
  padding: 0;
  position: relative;
  text-indent: 2.1875rem;
  transform: translate3d(0, 0, 0);
  width: 2.8125rem; }
  .tab-bar .menu-icon span::after {
    content: "";
    display: block;
    height: 0;
    position: absolute;
    top: 50%;
    margin-top: -0.5rem;
    left: 0.90625rem;
    box-shadow: 0 0 0 1px #FFFFFF, 0 7px 0 1px #FFFFFF, 0 14px 0 1px #FFFFFF;
    width: 1rem; }
  .tab-bar .menu-icon span:hover:after {
    box-shadow: 0 0 0 1px #b3b3b3, 0 7px 0 1px #b3b3b3, 0 14px 0 1px #b3b3b3; }

.left-off-canvas-menu {
  -webkit-backface-visibility: hidden;
  background: #333333;
  bottom: 0;
  box-sizing: content-box;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar;
  overflow-x: hidden;
  overflow-y: auto;
  position: absolute;
  transition: transform 500ms ease 0s;
  width: 15.625rem;
  z-index: 1001;
  -webkit-transform: translate3d(-100%, 0, 0);
  -moz-transform: translate3d(-100%, 0, 0);
  -ms-transform: translate(-100%, 0);
  -o-transform: translate3d(-100%, 0, 0);
  transform: translate3d(-100%, 0, 0);
  left: 0;
  top: 0; }
  .left-off-canvas-menu * {
    -webkit-backface-visibility: hidden; }

.right-off-canvas-menu {
  -webkit-backface-visibility: hidden;
  background: #333333;
  bottom: 0;
  box-sizing: content-box;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar;
  overflow-x: hidden;
  overflow-y: auto;
  position: absolute;
  transition: transform 500ms ease 0s;
  width: 15.625rem;
  z-index: 1001;
  -webkit-transform: translate3d(100%, 0, 0);
  -moz-transform: translate3d(100%, 0, 0);
  -ms-transform: translate(100%, 0);
  -o-transform: translate3d(100%, 0, 0);
  transform: translate3d(100%, 0, 0);
  right: 0;
  top: 0; }
  .right-off-canvas-menu * {
    -webkit-backface-visibility: hidden; }

.top-off-canvas-menu {
  -webkit-backface-visibility: hidden;
  background: #333333;
  bottom: 0;
  box-sizing: content-box;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar;
  overflow-x: hidden;
  overflow-y: auto;
  position: absolute;
  transition: transform 500ms ease 0s;
  width: 15.625rem;
  z-index: 1001;
  -webkit-transform: translate3d(0, -100%, 0);
  -moz-transform: translate3d(0, -100%, 0);
  -ms-transform: translate(0, -100%);
  -o-transform: translate3d(0, -100%, 0);
  transform: translate3d(0, -100%, 0);
  top: 0;
  width: 100%;
  height: 18.75rem; }
  .top-off-canvas-menu * {
    -webkit-backface-visibility: hidden; }

.bottom-off-canvas-menu {
  -webkit-backface-visibility: hidden;
  background: #333333;
  bottom: 0;
  box-sizing: content-box;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar;
  overflow-x: hidden;
  overflow-y: auto;
  position: absolute;
  transition: transform 500ms ease 0s;
  width: 15.625rem;
  z-index: 1001;
  -webkit-transform: translate3d(0, 100%, 0);
  -moz-transform: translate3d(0, 100%, 0);
  -ms-transform: translate(0, 100%);
  -o-transform: translate3d(0, 100%, 0);
  transform: translate3d(0, 100%, 0);
  bottom: 0;
  width: 100%;
  height: 18.75rem; }
  .bottom-off-canvas-menu * {
    -webkit-backface-visibility: hidden; }

ul.off-canvas-list {
  list-style-type: none;
  margin: 0;
  padding: 0; }
  ul.off-canvas-list li label {
    background: #444444;
    border-bottom: none;
    border-top: 1px solid #5e5e5e;
    color: #999999;
    display: block;
    font-size: 0.75rem;
    font-weight: bold;
    margin: 0;
    padding: 0.3rem 0.9375rem;
    text-transform: uppercase; }
  ul.off-canvas-list li a {
    border-bottom: 1px solid #262626;
    color: rgba(255, 255, 255, 0.7);
    display: block;
    padding: 0.66667rem;
    transition: background 300ms ease; }
    ul.off-canvas-list li a:hover {
      background: #242424; }
    ul.off-canvas-list li a:active {
      background: #242424; }

.move-right > .inner-wrap {
  -webkit-transform: translate3d(15.625rem, 0, 0);
  -moz-transform: translate3d(15.625rem, 0, 0);
  -ms-transform: translate(15.625rem, 0);
  -o-transform: translate3d(15.625rem, 0, 0);
  transform: translate3d(15.625rem, 0, 0); }
.move-right .exit-off-canvas {
  -webkit-backface-visibility: hidden;
  box-shadow: -4px 0 4px rgba(0, 0, 0, 0.5), 4px 0 4px rgba(0, 0, 0, 0.5);
  cursor: pointer;
  transition: background 300ms ease;
  -webkit-tap-highlight-color: transparent;
  background: rgba(255, 255, 255, 0.2);
  bottom: 0;
  display: block;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 1002; }
  @media only screen and (min-width: 40.0625em) {
    .move-right .exit-off-canvas:hover {
      background: rgba(255, 255, 255, 0.05); } }

.move-left > .inner-wrap {
  -webkit-transform: translate3d(-15.625rem, 0, 0);
  -moz-transform: translate3d(-15.625rem, 0, 0);
  -ms-transform: translate(-15.625rem, 0);
  -o-transform: translate3d(-15.625rem, 0, 0);
  transform: translate3d(-15.625rem, 0, 0); }
.move-left .exit-off-canvas {
  -webkit-backface-visibility: hidden;
  box-shadow: -4px 0 4px rgba(0, 0, 0, 0.5), 4px 0 4px rgba(0, 0, 0, 0.5);
  cursor: pointer;
  transition: background 300ms ease;
  -webkit-tap-highlight-color: transparent;
  background: rgba(255, 255, 255, 0.2);
  bottom: 0;
  display: block;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 1002; }
  @media only screen and (min-width: 40.0625em) {
    .move-left .exit-off-canvas:hover {
      background: rgba(255, 255, 255, 0.05); } }

.move-top > .inner-wrap {
  -webkit-transform: translate3d(0, -18.75rem, 0);
  -moz-transform: translate3d(0, -18.75rem, 0);
  -ms-transform: translate(0, -18.75rem);
  -o-transform: translate3d(0, -18.75rem, 0);
  transform: translate3d(0, -18.75rem, 0); }
.move-top .exit-off-canvas {
  -webkit-backface-visibility: hidden;
  box-shadow: -4px 0 4px rgba(0, 0, 0, 0.5), 4px 0 4px rgba(0, 0, 0, 0.5);
  cursor: pointer;
  transition: background 300ms ease;
  -webkit-tap-highlight-color: transparent;
  background: rgba(255, 255, 255, 0.2);
  bottom: 0;
  display: block;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 1002; }
  @media only screen and (min-width: 40.0625em) {
    .move-top .exit-off-canvas:hover {
      background: rgba(255, 255, 255, 0.05); } }

.move-bottom > .inner-wrap {
  -webkit-transform: translate3d(0, 18.75rem, 0);
  -moz-transform: translate3d(0, 18.75rem, 0);
  -ms-transform: translate(0, 18.75rem);
  -o-transform: translate3d(0, 18.75rem, 0);
  transform: translate3d(0, 18.75rem, 0); }
.move-bottom .exit-off-canvas {
  -webkit-backface-visibility: hidden;
  box-shadow: -4px 0 4px rgba(0, 0, 0, 0.5), 4px 0 4px rgba(0, 0, 0, 0.5);
  cursor: pointer;
  transition: background 300ms ease;
  -webkit-tap-highlight-color: transparent;
  background: rgba(255, 255, 255, 0.2);
  bottom: 0;
  display: block;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 1002; }
  @media only screen and (min-width: 40.0625em) {
    .move-bottom .exit-off-canvas:hover {
      background: rgba(255, 255, 255, 0.05); } }

.offcanvas-overlap .left-off-canvas-menu, .offcanvas-overlap .right-off-canvas-menu,
.offcanvas-overlap .top-off-canvas-menu, .offcanvas-overlap .bottom-off-canvas-menu {
  -ms-transform: none;
  -webkit-transform: none;
  -moz-transform: none;
  -o-transform: none;
  transform: none;
  z-index: 1003; }
.offcanvas-overlap .exit-off-canvas {
  -webkit-backface-visibility: hidden;
  box-shadow: -4px 0 4px rgba(0, 0, 0, 0.5), 4px 0 4px rgba(0, 0, 0, 0.5);
  cursor: pointer;
  transition: background 300ms ease;
  -webkit-tap-highlight-color: transparent;
  background: rgba(255, 255, 255, 0.2);
  bottom: 0;
  display: block;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 1002; }
  @media only screen and (min-width: 40.0625em) {
    .offcanvas-overlap .exit-off-canvas:hover {
      background: rgba(255, 255, 255, 0.05); } }

.offcanvas-overlap-left .right-off-canvas-menu {
  -ms-transform: none;
  -webkit-transform: none;
  -moz-transform: none;
  -o-transform: none;
  transform: none;
  z-index: 1003; }
.offcanvas-overlap-left .exit-off-canvas {
  -webkit-backface-visibility: hidden;
  box-shadow: -4px 0 4px rgba(0, 0, 0, 0.5), 4px 0 4px rgba(0, 0, 0, 0.5);
  cursor: pointer;
  transition: background 300ms ease;
  -webkit-tap-highlight-color: transparent;
  background: rgba(255, 255, 255, 0.2);
  bottom: 0;
  display: block;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 1002; }
  @media only screen and (min-width: 40.0625em) {
    .offcanvas-overlap-left .exit-off-canvas:hover {
      background: rgba(255, 255, 255, 0.05); } }

.offcanvas-overlap-right .left-off-canvas-menu {
  -ms-transform: none;
  -webkit-transform: none;
  -moz-transform: none;
  -o-transform: none;
  transform: none;
  z-index: 1003; }
.offcanvas-overlap-right .exit-off-canvas {
  -webkit-backface-visibility: hidden;
  box-shadow: -4px 0 4px rgba(0, 0, 0, 0.5), 4px 0 4px rgba(0, 0, 0, 0.5);
  cursor: pointer;
  transition: background 300ms ease;
  -webkit-tap-highlight-color: transparent;
  background: rgba(255, 255, 255, 0.2);
  bottom: 0;
  display: block;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 1002; }
  @media only screen and (min-width: 40.0625em) {
    .offcanvas-overlap-right .exit-off-canvas:hover {
      background: rgba(255, 255, 255, 0.05); } }

.offcanvas-overlap-top .bottom-off-canvas-menu {
  -ms-transform: none;
  -webkit-transform: none;
  -moz-transform: none;
  -o-transform: none;
  transform: none;
  z-index: 1003; }
.offcanvas-overlap-top .exit-off-canvas {
  -webkit-backface-visibility: hidden;
  box-shadow: -4px 0 4px rgba(0, 0, 0, 0.5), 4px 0 4px rgba(0, 0, 0, 0.5);
  cursor: pointer;
  transition: background 300ms ease;
  -webkit-tap-highlight-color: transparent;
  background: rgba(255, 255, 255, 0.2);
  bottom: 0;
  display: block;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 1002; }
  @media only screen and (min-width: 40.0625em) {
    .offcanvas-overlap-top .exit-off-canvas:hover {
      background: rgba(255, 255, 255, 0.05); } }

.offcanvas-overlap-bottom .top-off-canvas-menu {
  -ms-transform: none;
  -webkit-transform: none;
  -moz-transform: none;
  -o-transform: none;
  transform: none;
  z-index: 1003; }
.offcanvas-overlap-bottom .exit-off-canvas {
  -webkit-backface-visibility: hidden;
  box-shadow: -4px 0 4px rgba(0, 0, 0, 0.5), 4px 0 4px rgba(0, 0, 0, 0.5);
  cursor: pointer;
  transition: background 300ms ease;
  -webkit-tap-highlight-color: transparent;
  background: rgba(255, 255, 255, 0.2);
  bottom: 0;
  display: block;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 1002; }
  @media only screen and (min-width: 40.0625em) {
    .offcanvas-overlap-bottom .exit-off-canvas:hover {
      background: rgba(255, 255, 255, 0.05); } }

.no-csstransforms .left-off-canvas-menu {
  left: -15.625rem; }
.no-csstransforms .right-off-canvas-menu {
  right: -15.625rem; }
.no-csstransforms .top-off-canvas-menu {
  top: -18.75rem; }
.no-csstransforms .bottom-off-canvas-menu {
  bottom: -18.75rem; }
.no-csstransforms .move-left > .inner-wrap {
  right: 15.625rem; }
.no-csstransforms .move-right > .inner-wrap {
  left: 15.625rem; }
.no-csstransforms .move-top > .inner-wrap {
  right: 18.75rem; }
.no-csstransforms .move-bottom > .inner-wrap {
  left: 18.75rem; }

.left-submenu {
  -webkit-backface-visibility: hidden;
  -webkit-overflow-scrolling: touch;
  background: #333333;
  bottom: 0;
  box-sizing: content-box;
  margin: 0;
  overflow-x: hidden;
  overflow-y: auto;
  position: absolute;
  top: 0;
  width: 15.625rem;
  height: 18.75rem;
  z-index: 1002;
  -webkit-transform: translate3d(-100%, 0, 0);
  -moz-transform: translate3d(-100%, 0, 0);
  -ms-transform: translate(-100%, 0);
  -o-transform: translate3d(-100%, 0, 0);
  transform: translate3d(-100%, 0, 0);
  left: 0;
  -webkit-transition: -webkit-transform 500ms ease;
  -moz-transition: -moz-transform 500ms ease;
  -ms-transition: -ms-transform 500ms ease;
  -o-transition: -o-transform 500ms ease;
  transition: transform 500ms ease; }
  .left-submenu * {
    -webkit-backface-visibility: hidden; }
  .left-submenu .back > a {
    background: #444;
    border-bottom: none;
    border-top: 1px solid #5e5e5e;
    color: #999999;
    font-weight: bold;
    padding: 0.3rem 0.9375rem;
    text-transform: uppercase;
    margin: 0; }
    .left-submenu .back > a:hover {
      background: #303030;
      border-bottom: none;
      border-top: 1px solid #5e5e5e; }
    .left-submenu .back > a:before {
      content: "\AB";
      margin-right: .5rem;
      display: inline; }
  .left-submenu.move-right, .left-submenu.offcanvas-overlap-right, .left-submenu.offcanvas-overlap {
    -webkit-transform: translate3d(0%, 0, 0);
    -moz-transform: translate3d(0%, 0, 0);
    -ms-transform: translate(0%, 0);
    -o-transform: translate3d(0%, 0, 0);
    transform: translate3d(0%, 0, 0); }

.right-submenu {
  -webkit-backface-visibility: hidden;
  -webkit-overflow-scrolling: touch;
  background: #333333;
  bottom: 0;
  box-sizing: content-box;
  margin: 0;
  overflow-x: hidden;
  overflow-y: auto;
  position: absolute;
  top: 0;
  width: 15.625rem;
  height: 18.75rem;
  z-index: 1002;
  -webkit-transform: translate3d(100%, 0, 0);
  -moz-transform: translate3d(100%, 0, 0);
  -ms-transform: translate(100%, 0);
  -o-transform: translate3d(100%, 0, 0);
  transform: translate3d(100%, 0, 0);
  right: 0;
  -webkit-transition: -webkit-transform 500ms ease;
  -moz-transition: -moz-transform 500ms ease;
  -ms-transition: -ms-transform 500ms ease;
  -o-transition: -o-transform 500ms ease;
  transition: transform 500ms ease; }
  .right-submenu * {
    -webkit-backface-visibility: hidden; }
  .right-submenu .back > a {
    background: #444;
    border-bottom: none;
    border-top: 1px solid #5e5e5e;
    color: #999999;
    font-weight: bold;
    padding: 0.3rem 0.9375rem;
    text-transform: uppercase;
    margin: 0; }
    .right-submenu .back > a:hover {
      background: #303030;
      border-bottom: none;
      border-top: 1px solid #5e5e5e; }
    .right-submenu .back > a:after {
      content: "\BB";
      margin-left: .5rem;
      display: inline; }
  .right-submenu.move-left, .right-submenu.offcanvas-overlap-left, .right-submenu.offcanvas-overlap {
    -webkit-transform: translate3d(0%, 0, 0);
    -moz-transform: translate3d(0%, 0, 0);
    -ms-transform: translate(0%, 0);
    -o-transform: translate3d(0%, 0, 0);
    transform: translate3d(0%, 0, 0); }

.top-submenu {
  -webkit-backface-visibility: hidden;
  -webkit-overflow-scrolling: touch;
  background: #333333;
  bottom: 0;
  box-sizing: content-box;
  margin: 0;
  overflow-x: hidden;
  overflow-y: auto;
  position: absolute;
  top: 0;
  width: 15.625rem;
  height: 18.75rem;
  z-index: 1002;
  -webkit-transform: translate3d(0, -100%, 0);
  -moz-transform: translate3d(0, -100%, 0);
  -ms-transform: translate(0, -100%);
  -o-transform: translate3d(0, -100%, 0);
  transform: translate3d(0, -100%, 0);
  top: 0;
  width: 100%;
  -webkit-transition: -webkit-transform 500ms ease;
  -moz-transition: -moz-transform 500ms ease;
  -ms-transition: -ms-transform 500ms ease;
  -o-transition: -o-transform 500ms ease;
  transition: transform 500ms ease; }
  .top-submenu * {
    -webkit-backface-visibility: hidden; }
  .top-submenu .back > a {
    background: #444;
    border-bottom: none;
    border-top: 1px solid #5e5e5e;
    color: #999999;
    font-weight: bold;
    padding: 0.3rem 0.9375rem;
    text-transform: uppercase;
    margin: 0; }
    .top-submenu .back > a:hover {
      background: #303030;
      border-bottom: none;
      border-top: 1px solid #5e5e5e; }
  .top-submenu.move-bottom, .top-submenu.offcanvas-overlap-bottom, .top-submenu.offcanvas-overlap {
    -webkit-transform: translate3d(0, 0%, 0);
    -moz-transform: translate3d(0, 0%, 0);
    -ms-transform: translate(0, 0%);
    -o-transform: translate3d(0, 0%, 0);
    transform: translate3d(0, 0%, 0); }

.bottom-submenu {
  -webkit-backface-visibility: hidden;
  -webkit-overflow-scrolling: touch;
  background: #333333;
  bottom: 0;
  box-sizing: content-box;
  margin: 0;
  overflow-x: hidden;
  overflow-y: auto;
  position: absolute;
  top: 0;
  width: 15.625rem;
  height: 18.75rem;
  z-index: 1002;
  -webkit-transform: translate3d(0, 100%, 0);
  -moz-transform: translate3d(0, 100%, 0);
  -ms-transform: translate(0, 100%);
  -o-transform: translate3d(0, 100%, 0);
  transform: translate3d(0, 100%, 0);
  bottom: 0;
  width: 100%;
  -webkit-transition: -webkit-transform 500ms ease;
  -moz-transition: -moz-transform 500ms ease;
  -ms-transition: -ms-transform 500ms ease;
  -o-transition: -o-transform 500ms ease;
  transition: transform 500ms ease; }
  .bottom-submenu * {
    -webkit-backface-visibility: hidden; }
  .bottom-submenu .back > a {
    background: #444;
    border-bottom: none;
    border-top: 1px solid #5e5e5e;
    color: #999999;
    font-weight: bold;
    padding: 0.3rem 0.9375rem;
    text-transform: uppercase;
    margin: 0; }
    .bottom-submenu .back > a:hover {
      background: #303030;
      border-bottom: none;
      border-top: 1px solid #5e5e5e; }
  .bottom-submenu.move-top, .bottom-submenu.offcanvas-overlap-top, .bottom-submenu.offcanvas-overlap {
    -webkit-transform: translate3d(0, 0%, 0);
    -moz-transform: translate3d(0, 0%, 0);
    -ms-transform: translate(0, 0%);
    -o-transform: translate3d(0, 0%, 0);
    transform: translate3d(0, 0%, 0); }

.left-off-canvas-menu ul.off-canvas-list li.has-submenu > a:after {
  content: "\BB";
  margin-left: .5rem;
  display: inline; }

.right-off-canvas-menu ul.off-canvas-list li.has-submenu > a:before {
  content: "\AB";
  margin-right: .5rem;
  display: inline; }

/* Foundation Dropdowns */
.f-dropdown {
  display: none;
  left: -9999px;
  list-style: none;
  margin-left: 0;
  position: absolute;
  background: #FFFFFF;
  border: solid 1px #cccccc;
  font-size: 0.875rem;
  height: auto;
  max-height: none;
  width: 100%;
  z-index: 89;
  margin-top: 2px;
  max-width: 200px; }
  .f-dropdown.open {
    display: block; }
  .f-dropdown > *:first-child {
    margin-top: 0; }
  .f-dropdown > *:last-child {
    margin-bottom: 0; }
  .f-dropdown:before {
    border: inset 6px;
    content: "";
    display: block;
    height: 0;
    width: 0;
    border-color: transparent transparent #FFFFFF transparent;
    border-bottom-style: solid;
    position: absolute;
    top: -12px;
    left: 10px;
    z-index: 89; }
  .f-dropdown:after {
    border: inset 7px;
    content: "";
    display: block;
    height: 0;
    width: 0;
    border-color: transparent transparent #cccccc transparent;
    border-bottom-style: solid;
    position: absolute;
    top: -14px;
    left: 9px;
    z-index: 88; }
  .f-dropdown.right:before {
    left: auto;
    right: 10px; }
  .f-dropdown.right:after {
    left: auto;
    right: 9px; }
  .f-dropdown.drop-right {
    display: none;
    left: -9999px;
    list-style: none;
    margin-left: 0;
    position: absolute;
    background: #FFFFFF;
    border: solid 1px #cccccc;
    font-size: 0.875rem;
    height: auto;
    max-height: none;
    width: 100%;
    z-index: 89;
    margin-top: 0;
    margin-left: 2px;
    max-width: 200px; }
    .f-dropdown.drop-right.open {
      display: block; }
    .f-dropdown.drop-right > *:first-child {
      margin-top: 0; }
    .f-dropdown.drop-right > *:last-child {
      margin-bottom: 0; }
    .f-dropdown.drop-right:before {
      border: inset 6px;
      content: "";
      display: block;
      height: 0;
      width: 0;
      border-color: transparent #FFFFFF transparent transparent;
      border-right-style: solid;
      position: absolute;
      top: 10px;
      left: -12px;
      z-index: 89; }
    .f-dropdown.drop-right:after {
      border: inset 7px;
      content: "";
      display: block;
      height: 0;
      width: 0;
      border-color: transparent #cccccc transparent transparent;
      border-right-style: solid;
      position: absolute;
      top: 9px;
      left: -14px;
      z-index: 88; }
  .f-dropdown.drop-left {
    display: none;
    left: -9999px;
    list-style: none;
    margin-left: 0;
    position: absolute;
    background: #FFFFFF;
    border: solid 1px #cccccc;
    font-size: 0.875rem;
    height: auto;
    max-height: none;
    width: 100%;
    z-index: 89;
    margin-top: 0;
    margin-left: -2px;
    max-width: 200px; }
    .f-dropdown.drop-left.open {
      display: block; }
    .f-dropdown.drop-left > *:first-child {
      margin-top: 0; }
    .f-dropdown.drop-left > *:last-child {
      margin-bottom: 0; }
    .f-dropdown.drop-left:before {
      border: inset 6px;
      content: "";
      display: block;
      height: 0;
      width: 0;
      border-color: transparent transparent transparent #FFFFFF;
      border-left-style: solid;
      position: absolute;
      top: 10px;
      right: -12px;
      left: auto;
      z-index: 89; }
    .f-dropdown.drop-left:after {
      border: inset 7px;
      content: "";
      display: block;
      height: 0;
      width: 0;
      border-color: transparent transparent transparent #cccccc;
      border-left-style: solid;
      position: absolute;
      top: 9px;
      right: -14px;
      left: auto;
      z-index: 88; }
  .f-dropdown.drop-top {
    display: none;
    left: -9999px;
    list-style: none;
    margin-left: 0;
    position: absolute;
    background: #FFFFFF;
    border: solid 1px #cccccc;
    font-size: 0.875rem;
    height: auto;
    max-height: none;
    width: 100%;
    z-index: 89;
    margin-left: 0;
    margin-top: -2px;
    max-width: 200px; }
    .f-dropdown.drop-top.open {
      display: block; }
    .f-dropdown.drop-top > *:first-child {
      margin-top: 0; }
    .f-dropdown.drop-top > *:last-child {
      margin-bottom: 0; }
    .f-dropdown.drop-top:before {
      border: inset 6px;
      content: "";
      display: block;
      height: 0;
      width: 0;
      border-color: #FFFFFF transparent transparent transparent;
      border-top-style: solid;
      bottom: -12px;
      position: absolute;
      top: auto;
      left: 10px;
      right: auto;
      z-index: 89; }
    .f-dropdown.drop-top:after {
      border: inset 7px;
      content: "";
      display: block;
      height: 0;
      width: 0;
      border-color: #cccccc transparent transparent transparent;
      border-top-style: solid;
      bottom: -14px;
      position: absolute;
      top: auto;
      left: 9px;
      right: auto;
      z-index: 88; }
  .f-dropdown li {
    cursor: pointer;
    font-size: 0.875rem;
    line-height: 1.125rem;
    margin: 0; }
    .f-dropdown li:hover, .f-dropdown li:focus {
      background: #EEEEEE; }
    .f-dropdown li a {
      display: block;
      padding: 0.5rem;
      color: #555555; }
  .f-dropdown.content {
    display: none;
    left: -9999px;
    list-style: none;
    margin-left: 0;
    position: absolute;
    background: #FFFFFF;
    border: solid 1px #cccccc;
    font-size: 0.875rem;
    height: auto;
    max-height: none;
    padding: 1.25rem;
    width: 100%;
    z-index: 89;
    max-width: 200px; }
    .f-dropdown.content.open {
      display: block; }
    .f-dropdown.content > *:first-child {
      margin-top: 0; }
    .f-dropdown.content > *:last-child {
      margin-bottom: 0; }
  .f-dropdown.radius {
    border-radius: 3px; }
  .f-dropdown.tiny {
    max-width: 200px; }
  .f-dropdown.small {
    max-width: 300px; }
  .f-dropdown.medium {
    max-width: 500px; }
  .f-dropdown.large {
    max-width: 800px; }
  .f-dropdown.mega {
    width: 100% !important;
    max-width: 100% !important; }
    .f-dropdown.mega.open {
      left: 0 !important; }

table {
  background: #FFFFFF;
  border: solid 1px #DDDDDD;
  margin-bottom: 1.25rem;
  table-layout: auto; }
  table caption {
    background: transparent;
    color: #222222;
    font-size: 1rem;
    font-weight: bold; }
  table thead {
    background: #F5F5F5; }
    table thead tr th,
    table thead tr td {
      color: #222222;
      font-size: 0.875rem;
      font-weight: bold;
      padding: 0.5rem 0.625rem 0.625rem; }
  table tfoot {
    background: #F5F5F5; }
    table tfoot tr th,
    table tfoot tr td {
      color: #222222;
      font-size: 0.875rem;
      font-weight: bold;
      padding: 0.5rem 0.625rem 0.625rem; }
  table tr th,
  table tr td {
    color: #222222;
    font-size: 0.875rem;
    padding: 0.5625rem 0.625rem;
    text-align: left; }
  table tr.even, table tr.alt, table tr:nth-of-type(even) {
    background: #F9F9F9; }
  table thead tr th,
  table tfoot tr th,
  table tfoot tr td,
  table tbody tr th,
  table tbody tr td,
  table tr td {
    display: table-cell;
    line-height: 1.125rem; }

.range-slider {
  border: 1px solid #DDDDDD;
  margin: 1.25rem 0;
  position: relative;
  -ms-touch-action: none;
  touch-action: none;
  display: block;
  height: 1rem;
  width: 100%;
  background: #FAFAFA; }
  .range-slider.vertical-range {
    border: 1px solid #DDDDDD;
    margin: 1.25rem 0;
    position: relative;
    -ms-touch-action: none;
    touch-action: none;
    display: inline-block;
    height: 12.5rem;
    width: 1rem; }
    .range-slider.vertical-range .range-slider-handle {
      bottom: -10.5rem;
      margin-left: -0.5rem;
      margin-top: 0;
      position: absolute; }
    .range-slider.vertical-range .range-slider-active-segment {
      border-bottom-left-radius: inherit;
      border-bottom-right-radius: inherit;
      border-top-left-radius: initial;
      bottom: 0;
      height: auto;
      width: 0.875rem; }
  .range-slider.radius {
    background: #FAFAFA;
    border-radius: 3px; }
    .range-slider.radius .range-slider-handle {
      background: #008CBA;
      border-radius: 3px; }
      .range-slider.radius .range-slider-handle:hover {
        background: #007ba4; }
  .range-slider.round {
    background: #FAFAFA;
    border-radius: 1000px; }
    .range-slider.round .range-slider-handle {
      background: #008CBA;
      border-radius: 1000px; }
      .range-slider.round .range-slider-handle:hover {
        background: #007ba4; }
  .range-slider.disabled, .range-slider[disabled] {
    background: #FAFAFA;
    cursor: not-allowed;
    opacity: 0.7; }
    .range-slider.disabled .range-slider-handle, .range-slider[disabled] .range-slider-handle {
      background: #008CBA;
      cursor: default;
      opacity: 0.7; }
      .range-slider.disabled .range-slider-handle:hover, .range-slider[disabled] .range-slider-handle:hover {
        background: #007ba4; }

.range-slider-active-segment {
  background: #e5e5e5;
  border-bottom-left-radius: inherit;
  border-top-left-radius: inherit;
  display: inline-block;
  height: 0.875rem;
  position: absolute; }

.range-slider-handle {
  border: 1px solid none;
  cursor: pointer;
  display: inline-block;
  height: 1.375rem;
  position: absolute;
  top: -0.3125rem;
  width: 2rem;
  z-index: 1;
  -ms-touch-action: manipulation;
  touch-action: manipulation;
  background: #008CBA; }
  .range-slider-handle:hover {
    background: #007ba4; }

[class*="block-grid-"] {
  display: block;
  padding: 0;
  margin: 0 -0.625rem; }
  [class*="block-grid-"]:before, [class*="block-grid-"]:after {
    content: " ";
    display: table; }
  [class*="block-grid-"]:after {
    clear: both; }
  [class*="block-grid-"] > li {
    display: block;
    float: left;
    height: auto;
    padding: 0 0.625rem 1.25rem; }

@media only screen {
  .small-block-grid-1 > li {
    list-style: none;
    width: 100%; }
    .small-block-grid-1 > li:nth-of-type(1n) {
      clear: none; }
    .small-block-grid-1 > li:nth-of-type(1n+1) {
      clear: both; }

  .small-block-grid-2 > li {
    list-style: none;
    width: 50%; }
    .small-block-grid-2 > li:nth-of-type(1n) {
      clear: none; }
    .small-block-grid-2 > li:nth-of-type(2n+1) {
      clear: both; }

  .small-block-grid-3 > li {
    list-style: none;
    width: 33.33333%; }
    .small-block-grid-3 > li:nth-of-type(1n) {
      clear: none; }
    .small-block-grid-3 > li:nth-of-type(3n+1) {
      clear: both; }

  .small-block-grid-4 > li {
    list-style: none;
    width: 25%; }
    .small-block-grid-4 > li:nth-of-type(1n) {
      clear: none; }
    .small-block-grid-4 > li:nth-of-type(4n+1) {
      clear: both; }

  .small-block-grid-5 > li {
    list-style: none;
    width: 20%; }
    .small-block-grid-5 > li:nth-of-type(1n) {
      clear: none; }
    .small-block-grid-5 > li:nth-of-type(5n+1) {
      clear: both; }

  .small-block-grid-6 > li {
    list-style: none;
    width: 16.66667%; }
    .small-block-grid-6 > li:nth-of-type(1n) {
      clear: none; }
    .small-block-grid-6 > li:nth-of-type(6n+1) {
      clear: both; }

  .small-block-grid-7 > li {
    list-style: none;
    width: 14.28571%; }
    .small-block-grid-7 > li:nth-of-type(1n) {
      clear: none; }
    .small-block-grid-7 > li:nth-of-type(7n+1) {
      clear: both; }

  .small-block-grid-8 > li {
    list-style: none;
    width: 12.5%; }
    .small-block-grid-8 > li:nth-of-type(1n) {
      clear: none; }
    .small-block-grid-8 > li:nth-of-type(8n+1) {
      clear: both; }

  .small-block-grid-9 > li {
    list-style: none;
    width: 11.11111%; }
    .small-block-grid-9 > li:nth-of-type(1n) {
      clear: none; }
    .small-block-grid-9 > li:nth-of-type(9n+1) {
      clear: both; }

  .small-block-grid-10 > li {
    list-style: none;
    width: 10%; }
    .small-block-grid-10 > li:nth-of-type(1n) {
      clear: none; }
    .small-block-grid-10 > li:nth-of-type(10n+1) {
      clear: both; }

  .small-block-grid-11 > li {
    list-style: none;
    width: 9.09091%; }
    .small-block-grid-11 > li:nth-of-type(1n) {
      clear: none; }
    .small-block-grid-11 > li:nth-of-type(11n+1) {
      clear: both; }

  .small-block-grid-12 > li {
    list-style: none;
    width: 8.33333%; }
    .small-block-grid-12 > li:nth-of-type(1n) {
      clear: none; }
    .small-block-grid-12 > li:nth-of-type(12n+1) {
      clear: both; } }
@media only screen and (min-width: 40.0625em) {
  .medium-block-grid-1 > li {
    list-style: none;
    width: 100%; }
    .medium-block-grid-1 > li:nth-of-type(1n) {
      clear: none; }
    .medium-block-grid-1 > li:nth-of-type(1n+1) {
      clear: both; }

  .medium-block-grid-2 > li {
    list-style: none;
    width: 50%; }
    .medium-block-grid-2 > li:nth-of-type(1n) {
      clear: none; }
    .medium-block-grid-2 > li:nth-of-type(2n+1) {
      clear: both; }

  .medium-block-grid-3 > li {
    list-style: none;
    width: 33.33333%; }
    .medium-block-grid-3 > li:nth-of-type(1n) {
      clear: none; }
    .medium-block-grid-3 > li:nth-of-type(3n+1) {
      clear: both; }

  .medium-block-grid-4 > li {
    list-style: none;
    width: 25%; }
    .medium-block-grid-4 > li:nth-of-type(1n) {
      clear: none; }
    .medium-block-grid-4 > li:nth-of-type(4n+1) {
      clear: both; }

  .medium-block-grid-5 > li {
    list-style: none;
    width: 20%; }
    .medium-block-grid-5 > li:nth-of-type(1n) {
      clear: none; }
    .medium-block-grid-5 > li:nth-of-type(5n+1) {
      clear: both; }

  .medium-block-grid-6 > li {
    list-style: none;
    width: 16.66667%; }
    .medium-block-grid-6 > li:nth-of-type(1n) {
      clear: none; }
    .medium-block-grid-6 > li:nth-of-type(6n+1) {
      clear: both; }

  .medium-block-grid-7 > li {
    list-style: none;
    width: 14.28571%; }
    .medium-block-grid-7 > li:nth-of-type(1n) {
      clear: none; }
    .medium-block-grid-7 > li:nth-of-type(7n+1) {
      clear: both; }

  .medium-block-grid-8 > li {
    list-style: none;
    width: 12.5%; }
    .medium-block-grid-8 > li:nth-of-type(1n) {
      clear: none; }
    .medium-block-grid-8 > li:nth-of-type(8n+1) {
      clear: both; }

  .medium-block-grid-9 > li {
    list-style: none;
    width: 11.11111%; }
    .medium-block-grid-9 > li:nth-of-type(1n) {
      clear: none; }
    .medium-block-grid-9 > li:nth-of-type(9n+1) {
      clear: both; }

  .medium-block-grid-10 > li {
    list-style: none;
    width: 10%; }
    .medium-block-grid-10 > li:nth-of-type(1n) {
      clear: none; }
    .medium-block-grid-10 > li:nth-of-type(10n+1) {
      clear: both; }

  .medium-block-grid-11 > li {
    list-style: none;
    width: 9.09091%; }
    .medium-block-grid-11 > li:nth-of-type(1n) {
      clear: none; }
    .medium-block-grid-11 > li:nth-of-type(11n+1) {
      clear: both; }

  .medium-block-grid-12 > li {
    list-style: none;
    width: 8.33333%; }
    .medium-block-grid-12 > li:nth-of-type(1n) {
      clear: none; }
    .medium-block-grid-12 > li:nth-of-type(12n+1) {
      clear: both; } }
@media only screen and (min-width: 64.0625em) {
  .large-block-grid-1 > li {
    list-style: none;
    width: 100%; }
    .large-block-grid-1 > li:nth-of-type(1n) {
      clear: none; }
    .large-block-grid-1 > li:nth-of-type(1n+1) {
      clear: both; }

  .large-block-grid-2 > li {
    list-style: none;
    width: 50%; }
    .large-block-grid-2 > li:nth-of-type(1n) {
      clear: none; }
    .large-block-grid-2 > li:nth-of-type(2n+1) {
      clear: both; }

  .large-block-grid-3 > li {
    list-style: none;
    width: 33.33333%; }
    .large-block-grid-3 > li:nth-of-type(1n) {
      clear: none; }
    .large-block-grid-3 > li:nth-of-type(3n+1) {
      clear: both; }

  .large-block-grid-4 > li {
    list-style: none;
    width: 25%; }
    .large-block-grid-4 > li:nth-of-type(1n) {
      clear: none; }
    .large-block-grid-4 > li:nth-of-type(4n+1) {
      clear: both; }

  .large-block-grid-5 > li {
    list-style: none;
    width: 20%; }
    .large-block-grid-5 > li:nth-of-type(1n) {
      clear: none; }
    .large-block-grid-5 > li:nth-of-type(5n+1) {
      clear: both; }

  .large-block-grid-6 > li {
    list-style: none;
    width: 16.66667%; }
    .large-block-grid-6 > li:nth-of-type(1n) {
      clear: none; }
    .large-block-grid-6 > li:nth-of-type(6n+1) {
      clear: both; }

  .large-block-grid-7 > li {
    list-style: none;
    width: 14.28571%; }
    .large-block-grid-7 > li:nth-of-type(1n) {
      clear: none; }
    .large-block-grid-7 > li:nth-of-type(7n+1) {
      clear: both; }

  .large-block-grid-8 > li {
    list-style: none;
    width: 12.5%; }
    .large-block-grid-8 > li:nth-of-type(1n) {
      clear: none; }
    .large-block-grid-8 > li:nth-of-type(8n+1) {
      clear: both; }

  .large-block-grid-9 > li {
    list-style: none;
    width: 11.11111%; }
    .large-block-grid-9 > li:nth-of-type(1n) {
      clear: none; }
    .large-block-grid-9 > li:nth-of-type(9n+1) {
      clear: both; }

  .large-block-grid-10 > li {
    list-style: none;
    width: 10%; }
    .large-block-grid-10 > li:nth-of-type(1n) {
      clear: none; }
    .large-block-grid-10 > li:nth-of-type(10n+1) {
      clear: both; }

  .large-block-grid-11 > li {
    list-style: none;
    width: 9.09091%; }
    .large-block-grid-11 > li:nth-of-type(1n) {
      clear: none; }
    .large-block-grid-11 > li:nth-of-type(11n+1) {
      clear: both; }

  .large-block-grid-12 > li {
    list-style: none;
    width: 8.33333%; }
    .large-block-grid-12 > li:nth-of-type(1n) {
      clear: none; }
    .large-block-grid-12 > li:nth-of-type(12n+1) {
      clear: both; } }
.flex-video {
  height: 0;
  margin-bottom: 1rem;
  overflow: hidden;
  padding-bottom: 67.5%;
  padding-top: 1.5625rem;
  position: relative; }
  .flex-video.widescreen {
    padding-bottom: 56.34%; }
  .flex-video.vimeo {
    padding-top: 0; }
  .flex-video iframe,
  .flex-video object,
  .flex-video embed,
  .flex-video video {
    height: 100%;
    position: absolute;
    top: 0;
    width: 100%;
    left: 0; }

.keystroke,
kbd {
  background-color: #ededed;
  border-color: #dddddd;
  color: #222222;
  border-style: solid;
  border-width: 1px;
  font-family: "Consolas", "Menlo", "Courier", monospace;
  font-size: inherit;
  margin: 0;
  padding: 0.125rem 0.25rem 0;
  border-radius: 3px; }

.switch {
  border: none;
  margin-bottom: 1.5rem;
  outline: 0;
  padding: 0;
  position: relative;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none; }
  .switch label {
    background: #DDDDDD;
    color: transparent;
    cursor: pointer;
    display: block;
    margin-bottom: 1rem;
    position: relative;
    text-indent: 100%;
    width: 4rem;
    height: 2rem;
    transition: left 0.15s ease-out; }
  .switch input {
    left: 10px;
    opacity: 0;
    padding: 0;
    position: absolute;
    top: 9px; }
    .switch input + label {
      margin-left: 0;
      margin-right: 0; }
  .switch label:after {
    background: #FFFFFF;
    content: "";
    display: block;
    height: 1.5rem;
    left: .25rem;
    position: absolute;
    top: .25rem;
    width: 1.5rem;
    -webkit-transition: left 0.15s ease-out;
    -moz-transition: left 0.15s ease-out;
    -o-transition: translate3d(0, 0, 0);
    transition: left 0.15s ease-out;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }
  .switch input:checked + label {
    background: #008CBA; }
  .switch input:checked + label:after {
    left: 2.25rem; }
  .switch label {
    height: 2rem;
    width: 4rem; }
  .switch label:after {
    height: 1.5rem;
    width: 1.5rem; }
  .switch input:checked + label:after {
    left: 2.25rem; }
  .switch label {
    color: transparent;
    background: #DDDDDD; }
  .switch label:after {
    background: #FFFFFF; }
  .switch input:checked + label {
    background: #008CBA; }
  .switch.large label {
    height: 2.5rem;
    width: 5rem; }
  .switch.large label:after {
    height: 2rem;
    width: 2rem; }
  .switch.large input:checked + label:after {
    left: 2.75rem; }
  .switch.small label {
    height: 1.75rem;
    width: 3.5rem; }
  .switch.small label:after {
    height: 1.25rem;
    width: 1.25rem; }
  .switch.small input:checked + label:after {
    left: 2rem; }
  .switch.tiny label {
    height: 1.5rem;
    width: 3rem; }
  .switch.tiny label:after {
    height: 1rem;
    width: 1rem; }
  .switch.tiny input:checked + label:after {
    left: 1.75rem; }
  .switch.radius label {
    border-radius: 4px; }
  .switch.radius label:after {
    border-radius: 3px; }
  .switch.round {
    border-radius: 1000px; }
    .switch.round label {
      border-radius: 2rem; }
    .switch.round label:after {
      border-radius: 2rem; }

/* small displays */
@media only screen {
  .show-for-small-only, .show-for-small-up, .show-for-small, .show-for-small-down, .hide-for-medium-only, .hide-for-medium-up, .hide-for-medium, .show-for-medium-down, .hide-for-large-only, .hide-for-large-up, .hide-for-large, .show-for-large-down, .hide-for-xlarge-only, .hide-for-xlarge-up, .hide-for-xlarge, .show-for-xlarge-down, .hide-for-xxlarge-only, .hide-for-xxlarge-up, .hide-for-xxlarge, .show-for-xxlarge-down {
    display: inherit !important; }

  .hide-for-small-only, .hide-for-small-up, .hide-for-small, .hide-for-small-down, .show-for-medium-only, .show-for-medium-up, .show-for-medium, .hide-for-medium-down, .show-for-large-only, .show-for-large-up, .show-for-large, .hide-for-large-down, .show-for-xlarge-only, .show-for-xlarge-up, .show-for-xlarge, .hide-for-xlarge-down, .show-for-xxlarge-only, .show-for-xxlarge-up, .show-for-xxlarge, .hide-for-xxlarge-down {
    display: none !important; }

  .visible-for-small-only, .visible-for-small-up, .visible-for-small, .visible-for-small-down, .hidden-for-medium-only, .hidden-for-medium-up, .hidden-for-medium, .visible-for-medium-down, .hidden-for-large-only, .hidden-for-large-up, .hidden-for-large, .visible-for-large-down, .hidden-for-xlarge-only, .hidden-for-xlarge-up, .hidden-for-xlarge, .visible-for-xlarge-down, .hidden-for-xxlarge-only, .hidden-for-xxlarge-up, .hidden-for-xxlarge, .visible-for-xxlarge-down {
    position: static !important;
    height: auto;
    width: auto;
    overflow: visible;
    clip: auto; }

  .hidden-for-small-only, .hidden-for-small-up, .hidden-for-small, .hidden-for-small-down, .visible-for-medium-only, .visible-for-medium-up, .visible-for-medium, .hidden-for-medium-down, .visible-for-large-only, .visible-for-large-up, .visible-for-large, .hidden-for-large-down, .visible-for-xlarge-only, .visible-for-xlarge-up, .visible-for-xlarge, .hidden-for-xlarge-down, .visible-for-xxlarge-only, .visible-for-xxlarge-up, .visible-for-xxlarge, .hidden-for-xxlarge-down {
    clip: rect(1px, 1px, 1px, 1px);
    height: 1px;
    overflow: hidden;
    position: absolute !important;
    width: 1px; }

  table.show-for-small-only, table.show-for-small-up, table.show-for-small, table.show-for-small-down, table.hide-for-medium-only, table.hide-for-medium-up, table.hide-for-medium, table.show-for-medium-down, table.hide-for-large-only, table.hide-for-large-up, table.hide-for-large, table.show-for-large-down, table.hide-for-xlarge-only, table.hide-for-xlarge-up, table.hide-for-xlarge, table.show-for-xlarge-down, table.hide-for-xxlarge-only, table.hide-for-xxlarge-up, table.hide-for-xxlarge, table.show-for-xxlarge-down {
    display: table !important; }

  thead.show-for-small-only, thead.show-for-small-up, thead.show-for-small, thead.show-for-small-down, thead.hide-for-medium-only, thead.hide-for-medium-up, thead.hide-for-medium, thead.show-for-medium-down, thead.hide-for-large-only, thead.hide-for-large-up, thead.hide-for-large, thead.show-for-large-down, thead.hide-for-xlarge-only, thead.hide-for-xlarge-up, thead.hide-for-xlarge, thead.show-for-xlarge-down, thead.hide-for-xxlarge-only, thead.hide-for-xxlarge-up, thead.hide-for-xxlarge, thead.show-for-xxlarge-down {
    display: table-header-group !important; }

  tbody.show-for-small-only, tbody.show-for-small-up, tbody.show-for-small, tbody.show-for-small-down, tbody.hide-for-medium-only, tbody.hide-for-medium-up, tbody.hide-for-medium, tbody.show-for-medium-down, tbody.hide-for-large-only, tbody.hide-for-large-up, tbody.hide-for-large, tbody.show-for-large-down, tbody.hide-for-xlarge-only, tbody.hide-for-xlarge-up, tbody.hide-for-xlarge, tbody.show-for-xlarge-down, tbody.hide-for-xxlarge-only, tbody.hide-for-xxlarge-up, tbody.hide-for-xxlarge, tbody.show-for-xxlarge-down {
    display: table-row-group !important; }

  tr.show-for-small-only, tr.show-for-small-up, tr.show-for-small, tr.show-for-small-down, tr.hide-for-medium-only, tr.hide-for-medium-up, tr.hide-for-medium, tr.show-for-medium-down, tr.hide-for-large-only, tr.hide-for-large-up, tr.hide-for-large, tr.show-for-large-down, tr.hide-for-xlarge-only, tr.hide-for-xlarge-up, tr.hide-for-xlarge, tr.show-for-xlarge-down, tr.hide-for-xxlarge-only, tr.hide-for-xxlarge-up, tr.hide-for-xxlarge, tr.show-for-xxlarge-down {
    display: table-row; }

  th.show-for-small-only, td.show-for-small-only, th.show-for-small-up, td.show-for-small-up, th.show-for-small, td.show-for-small, th.show-for-small-down, td.show-for-small-down, th.hide-for-medium-only, td.hide-for-medium-only, th.hide-for-medium-up, td.hide-for-medium-up, th.hide-for-medium, td.hide-for-medium, th.show-for-medium-down, td.show-for-medium-down, th.hide-for-large-only, td.hide-for-large-only, th.hide-for-large-up, td.hide-for-large-up, th.hide-for-large, td.hide-for-large, th.show-for-large-down, td.show-for-large-down, th.hide-for-xlarge-only, td.hide-for-xlarge-only, th.hide-for-xlarge-up, td.hide-for-xlarge-up, th.hide-for-xlarge, td.hide-for-xlarge, th.show-for-xlarge-down, td.show-for-xlarge-down, th.hide-for-xxlarge-only, td.hide-for-xxlarge-only, th.hide-for-xxlarge-up, td.hide-for-xxlarge-up, th.hide-for-xxlarge, td.hide-for-xxlarge, th.show-for-xxlarge-down, td.show-for-xxlarge-down {
    display: table-cell !important; } }
/* medium displays */
@media only screen and (min-width: 40.0625em) {
  .hide-for-small-only, .show-for-small-up, .hide-for-small, .hide-for-small-down, .show-for-medium-only, .show-for-medium-up, .show-for-medium, .show-for-medium-down, .hide-for-large-only, .hide-for-large-up, .hide-for-large, .show-for-large-down, .hide-for-xlarge-only, .hide-for-xlarge-up, .hide-for-xlarge, .show-for-xlarge-down, .hide-for-xxlarge-only, .hide-for-xxlarge-up, .hide-for-xxlarge, .show-for-xxlarge-down {
    display: inherit !important; }

  .show-for-small-only, .hide-for-small-up, .show-for-small, .show-for-small-down, .hide-for-medium-only, .hide-for-medium-up, .hide-for-medium, .hide-for-medium-down, .show-for-large-only, .show-for-large-up, .show-for-large, .hide-for-large-down, .show-for-xlarge-only, .show-for-xlarge-up, .show-for-xlarge, .hide-for-xlarge-down, .show-for-xxlarge-only, .show-for-xxlarge-up, .show-for-xxlarge, .hide-for-xxlarge-down {
    display: none !important; }

  .hidden-for-small-only, .visible-for-small-up, .hidden-for-small, .hidden-for-small-down, .visible-for-medium-only, .visible-for-medium-up, .visible-for-medium, .visible-for-medium-down, .hidden-for-large-only, .hidden-for-large-up, .hidden-for-large, .visible-for-large-down, .hidden-for-xlarge-only, .hidden-for-xlarge-up, .hidden-for-xlarge, .visible-for-xlarge-down, .hidden-for-xxlarge-only, .hidden-for-xxlarge-up, .hidden-for-xxlarge, .visible-for-xxlarge-down {
    position: static !important;
    height: auto;
    width: auto;
    overflow: visible;
    clip: auto; }

  .visible-for-small-only, .hidden-for-small-up, .visible-for-small, .visible-for-small-down, .hidden-for-medium-only, .hidden-for-medium-up, .hidden-for-medium, .hidden-for-medium-down, .visible-for-large-only, .visible-for-large-up, .visible-for-large, .hidden-for-large-down, .visible-for-xlarge-only, .visible-for-xlarge-up, .visible-for-xlarge, .hidden-for-xlarge-down, .visible-for-xxlarge-only, .visible-for-xxlarge-up, .visible-for-xxlarge, .hidden-for-xxlarge-down {
    clip: rect(1px, 1px, 1px, 1px);
    height: 1px;
    overflow: hidden;
    position: absolute !important;
    width: 1px; }

  table.hide-for-small-only, table.show-for-small-up, table.hide-for-small, table.hide-for-small-down, table.show-for-medium-only, table.show-for-medium-up, table.show-for-medium, table.show-for-medium-down, table.hide-for-large-only, table.hide-for-large-up, table.hide-for-large, table.show-for-large-down, table.hide-for-xlarge-only, table.hide-for-xlarge-up, table.hide-for-xlarge, table.show-for-xlarge-down, table.hide-for-xxlarge-only, table.hide-for-xxlarge-up, table.hide-for-xxlarge, table.show-for-xxlarge-down {
    display: table !important; }

  thead.hide-for-small-only, thead.show-for-small-up, thead.hide-for-small, thead.hide-for-small-down, thead.show-for-medium-only, thead.show-for-medium-up, thead.show-for-medium, thead.show-for-medium-down, thead.hide-for-large-only, thead.hide-for-large-up, thead.hide-for-large, thead.show-for-large-down, thead.hide-for-xlarge-only, thead.hide-for-xlarge-up, thead.hide-for-xlarge, thead.show-for-xlarge-down, thead.hide-for-xxlarge-only, thead.hide-for-xxlarge-up, thead.hide-for-xxlarge, thead.show-for-xxlarge-down {
    display: table-header-group !important; }

  tbody.hide-for-small-only, tbody.show-for-small-up, tbody.hide-for-small, tbody.hide-for-small-down, tbody.show-for-medium-only, tbody.show-for-medium-up, tbody.show-for-medium, tbody.show-for-medium-down, tbody.hide-for-large-only, tbody.hide-for-large-up, tbody.hide-for-large, tbody.show-for-large-down, tbody.hide-for-xlarge-only, tbody.hide-for-xlarge-up, tbody.hide-for-xlarge, tbody.show-for-xlarge-down, tbody.hide-for-xxlarge-only, tbody.hide-for-xxlarge-up, tbody.hide-for-xxlarge, tbody.show-for-xxlarge-down {
    display: table-row-group !important; }

  tr.hide-for-small-only, tr.show-for-small-up, tr.hide-for-small, tr.hide-for-small-down, tr.show-for-medium-only, tr.show-for-medium-up, tr.show-for-medium, tr.show-for-medium-down, tr.hide-for-large-only, tr.hide-for-large-up, tr.hide-for-large, tr.show-for-large-down, tr.hide-for-xlarge-only, tr.hide-for-xlarge-up, tr.hide-for-xlarge, tr.show-for-xlarge-down, tr.hide-for-xxlarge-only, tr.hide-for-xxlarge-up, tr.hide-for-xxlarge, tr.show-for-xxlarge-down {
    display: table-row; }

  th.hide-for-small-only, td.hide-for-small-only, th.show-for-small-up, td.show-for-small-up, th.hide-for-small, td.hide-for-small, th.hide-for-small-down, td.hide-for-small-down, th.show-for-medium-only, td.show-for-medium-only, th.show-for-medium-up, td.show-for-medium-up, th.show-for-medium, td.show-for-medium, th.show-for-medium-down, td.show-for-medium-down, th.hide-for-large-only, td.hide-for-large-only, th.hide-for-large-up, td.hide-for-large-up, th.hide-for-large, td.hide-for-large, th.show-for-large-down, td.show-for-large-down, th.hide-for-xlarge-only, td.hide-for-xlarge-only, th.hide-for-xlarge-up, td.hide-for-xlarge-up, th.hide-for-xlarge, td.hide-for-xlarge, th.show-for-xlarge-down, td.show-for-xlarge-down, th.hide-for-xxlarge-only, td.hide-for-xxlarge-only, th.hide-for-xxlarge-up, td.hide-for-xxlarge-up, th.hide-for-xxlarge, td.hide-for-xxlarge, th.show-for-xxlarge-down, td.show-for-xxlarge-down {
    display: table-cell !important; } }
/* large displays */
@media only screen and (min-width: 64.0625em) {
  .hide-for-small-only, .show-for-small-up, .hide-for-small, .hide-for-small-down, .hide-for-medium-only, .show-for-medium-up, .hide-for-medium, .hide-for-medium-down, .show-for-large-only, .show-for-large-up, .show-for-large, .show-for-large-down, .hide-for-xlarge-only, .hide-for-xlarge-up, .hide-for-xlarge, .show-for-xlarge-down, .hide-for-xxlarge-only, .hide-for-xxlarge-up, .hide-for-xxlarge, .show-for-xxlarge-down {
    display: inherit !important; }

  .show-for-small-only, .hide-for-small-up, .show-for-small, .show-for-small-down, .show-for-medium-only, .hide-for-medium-up, .show-for-medium, .show-for-medium-down, .hide-for-large-only, .hide-for-large-up, .hide-for-large, .hide-for-large-down, .show-for-xlarge-only, .show-for-xlarge-up, .show-for-xlarge, .hide-for-xlarge-down, .show-for-xxlarge-only, .show-for-xxlarge-up, .show-for-xxlarge, .hide-for-xxlarge-down {
    display: none !important; }

  .hidden-for-small-only, .visible-for-small-up, .hidden-for-small, .hidden-for-small-down, .hidden-for-medium-only, .visible-for-medium-up, .hidden-for-medium, .hidden-for-medium-down, .visible-for-large-only, .visible-for-large-up, .visible-for-large, .visible-for-large-down, .hidden-for-xlarge-only, .hidden-for-xlarge-up, .hidden-for-xlarge, .visible-for-xlarge-down, .hidden-for-xxlarge-only, .hidden-for-xxlarge-up, .hidden-for-xxlarge, .visible-for-xxlarge-down {
    position: static !important;
    height: auto;
    width: auto;
    overflow: visible;
    clip: auto; }

  .visible-for-small-only, .hidden-for-small-up, .visible-for-small, .visible-for-small-down, .visible-for-medium-only, .hidden-for-medium-up, .visible-for-medium, .visible-for-medium-down, .hidden-for-large-only, .hidden-for-large-up, .hidden-for-large, .hidden-for-large-down, .visible-for-xlarge-only, .visible-for-xlarge-up, .visible-for-xlarge, .hidden-for-xlarge-down, .visible-for-xxlarge-only, .visible-for-xxlarge-up, .visible-for-xxlarge, .hidden-for-xxlarge-down {
    clip: rect(1px, 1px, 1px, 1px);
    height: 1px;
    overflow: hidden;
    position: absolute !important;
    width: 1px; }

  table.hide-for-small-only, table.show-for-small-up, table.hide-for-small, table.hide-for-small-down, table.hide-for-medium-only, table.show-for-medium-up, table.hide-for-medium, table.hide-for-medium-down, table.show-for-large-only, table.show-for-large-up, table.show-for-large, table.show-for-large-down, table.hide-for-xlarge-only, table.hide-for-xlarge-up, table.hide-for-xlarge, table.show-for-xlarge-down, table.hide-for-xxlarge-only, table.hide-for-xxlarge-up, table.hide-for-xxlarge, table.show-for-xxlarge-down {
    display: table !important; }

  thead.hide-for-small-only, thead.show-for-small-up, thead.hide-for-small, thead.hide-for-small-down, thead.hide-for-medium-only, thead.show-for-medium-up, thead.hide-for-medium, thead.hide-for-medium-down, thead.show-for-large-only, thead.show-for-large-up, thead.show-for-large, thead.show-for-large-down, thead.hide-for-xlarge-only, thead.hide-for-xlarge-up, thead.hide-for-xlarge, thead.show-for-xlarge-down, thead.hide-for-xxlarge-only, thead.hide-for-xxlarge-up, thead.hide-for-xxlarge, thead.show-for-xxlarge-down {
    display: table-header-group !important; }

  tbody.hide-for-small-only, tbody.show-for-small-up, tbody.hide-for-small, tbody.hide-for-small-down, tbody.hide-for-medium-only, tbody.show-for-medium-up, tbody.hide-for-medium, tbody.hide-for-medium-down, tbody.show-for-large-only, tbody.show-for-large-up, tbody.show-for-large, tbody.show-for-large-down, tbody.hide-for-xlarge-only, tbody.hide-for-xlarge-up, tbody.hide-for-xlarge, tbody.show-for-xlarge-down, tbody.hide-for-xxlarge-only, tbody.hide-for-xxlarge-up, tbody.hide-for-xxlarge, tbody.show-for-xxlarge-down {
    display: table-row-group !important; }

  tr.hide-for-small-only, tr.show-for-small-up, tr.hide-for-small, tr.hide-for-small-down, tr.hide-for-medium-only, tr.show-for-medium-up, tr.hide-for-medium, tr.hide-for-medium-down, tr.show-for-large-only, tr.show-for-large-up, tr.show-for-large, tr.show-for-large-down, tr.hide-for-xlarge-only, tr.hide-for-xlarge-up, tr.hide-for-xlarge, tr.show-for-xlarge-down, tr.hide-for-xxlarge-only, tr.hide-for-xxlarge-up, tr.hide-for-xxlarge, tr.show-for-xxlarge-down {
    display: table-row; }

  th.hide-for-small-only, td.hide-for-small-only, th.show-for-small-up, td.show-for-small-up, th.hide-for-small, td.hide-for-small, th.hide-for-small-down, td.hide-for-small-down, th.hide-for-medium-only, td.hide-for-medium-only, th.show-for-medium-up, td.show-for-medium-up, th.hide-for-medium, td.hide-for-medium, th.hide-for-medium-down, td.hide-for-medium-down, th.show-for-large-only, td.show-for-large-only, th.show-for-large-up, td.show-for-large-up, th.show-for-large, td.show-for-large, th.show-for-large-down, td.show-for-large-down, th.hide-for-xlarge-only, td.hide-for-xlarge-only, th.hide-for-xlarge-up, td.hide-for-xlarge-up, th.hide-for-xlarge, td.hide-for-xlarge, th.show-for-xlarge-down, td.show-for-xlarge-down, th.hide-for-xxlarge-only, td.hide-for-xxlarge-only, th.hide-for-xxlarge-up, td.hide-for-xxlarge-up, th.hide-for-xxlarge, td.hide-for-xxlarge, th.show-for-xxlarge-down, td.show-for-xxlarge-down {
    display: table-cell !important; } }
/* xlarge displays */
@media only screen and (min-width: 90.0625em) {
  .hide-for-small-only, .show-for-small-up, .hide-for-small, .hide-for-small-down, .hide-for-medium-only, .show-for-medium-up, .hide-for-medium, .hide-for-medium-down, .hide-for-large-only, .show-for-large-up, .hide-for-large, .hide-for-large-down, .show-for-xlarge-only, .show-for-xlarge-up, .show-for-xlarge, .show-for-xlarge-down, .hide-for-xxlarge-only, .hide-for-xxlarge-up, .hide-for-xxlarge, .show-for-xxlarge-down {
    display: inherit !important; }

  .show-for-small-only, .hide-for-small-up, .show-for-small, .show-for-small-down, .show-for-medium-only, .hide-for-medium-up, .show-for-medium, .show-for-medium-down, .show-for-large-only, .hide-for-large-up, .show-for-large, .show-for-large-down, .hide-for-xlarge-only, .hide-for-xlarge-up, .hide-for-xlarge, .hide-for-xlarge-down, .show-for-xxlarge-only, .show-for-xxlarge-up, .show-for-xxlarge, .hide-for-xxlarge-down {
    display: none !important; }

  .hidden-for-small-only, .visible-for-small-up, .hidden-for-small, .hidden-for-small-down, .hidden-for-medium-only, .visible-for-medium-up, .hidden-for-medium, .hidden-for-medium-down, .hidden-for-large-only, .visible-for-large-up, .hidden-for-large, .hidden-for-large-down, .visible-for-xlarge-only, .visible-for-xlarge-up, .visible-for-xlarge, .visible-for-xlarge-down, .hidden-for-xxlarge-only, .hidden-for-xxlarge-up, .hidden-for-xxlarge, .visible-for-xxlarge-down {
    position: static !important;
    height: auto;
    width: auto;
    overflow: visible;
    clip: auto; }

  .visible-for-small-only, .hidden-for-small-up, .visible-for-small, .visible-for-small-down, .visible-for-medium-only, .hidden-for-medium-up, .visible-for-medium, .visible-for-medium-down, .visible-for-large-only, .hidden-for-large-up, .visible-for-large, .visible-for-large-down, .hidden-for-xlarge-only, .hidden-for-xlarge-up, .hidden-for-xlarge, .hidden-for-xlarge-down, .visible-for-xxlarge-only, .visible-for-xxlarge-up, .visible-for-xxlarge, .hidden-for-xxlarge-down {
    clip: rect(1px, 1px, 1px, 1px);
    height: 1px;
    overflow: hidden;
    position: absolute !important;
    width: 1px; }

  table.hide-for-small-only, table.show-for-small-up, table.hide-for-small, table.hide-for-small-down, table.hide-for-medium-only, table.show-for-medium-up, table.hide-for-medium, table.hide-for-medium-down, table.hide-for-large-only, table.show-for-large-up, table.hide-for-large, table.hide-for-large-down, table.show-for-xlarge-only, table.show-for-xlarge-up, table.show-for-xlarge, table.show-for-xlarge-down, table.hide-for-xxlarge-only, table.hide-for-xxlarge-up, table.hide-for-xxlarge, table.show-for-xxlarge-down {
    display: table !important; }

  thead.hide-for-small-only, thead.show-for-small-up, thead.hide-for-small, thead.hide-for-small-down, thead.hide-for-medium-only, thead.show-for-medium-up, thead.hide-for-medium, thead.hide-for-medium-down, thead.hide-for-large-only, thead.show-for-large-up, thead.hide-for-large, thead.hide-for-large-down, thead.show-for-xlarge-only, thead.show-for-xlarge-up, thead.show-for-xlarge, thead.show-for-xlarge-down, thead.hide-for-xxlarge-only, thead.hide-for-xxlarge-up, thead.hide-for-xxlarge, thead.show-for-xxlarge-down {
    display: table-header-group !important; }

  tbody.hide-for-small-only, tbody.show-for-small-up, tbody.hide-for-small, tbody.hide-for-small-down, tbody.hide-for-medium-only, tbody.show-for-medium-up, tbody.hide-for-medium, tbody.hide-for-medium-down, tbody.hide-for-large-only, tbody.show-for-large-up, tbody.hide-for-large, tbody.hide-for-large-down, tbody.show-for-xlarge-only, tbody.show-for-xlarge-up, tbody.show-for-xlarge, tbody.show-for-xlarge-down, tbody.hide-for-xxlarge-only, tbody.hide-for-xxlarge-up, tbody.hide-for-xxlarge, tbody.show-for-xxlarge-down {
    display: table-row-group !important; }

  tr.hide-for-small-only, tr.show-for-small-up, tr.hide-for-small, tr.hide-for-small-down, tr.hide-for-medium-only, tr.show-for-medium-up, tr.hide-for-medium, tr.hide-for-medium-down, tr.hide-for-large-only, tr.show-for-large-up, tr.hide-for-large, tr.hide-for-large-down, tr.show-for-xlarge-only, tr.show-for-xlarge-up, tr.show-for-xlarge, tr.show-for-xlarge-down, tr.hide-for-xxlarge-only, tr.hide-for-xxlarge-up, tr.hide-for-xxlarge, tr.show-for-xxlarge-down {
    display: table-row; }

  th.hide-for-small-only, td.hide-for-small-only, th.show-for-small-up, td.show-for-small-up, th.hide-for-small, td.hide-for-small, th.hide-for-small-down, td.hide-for-small-down, th.hide-for-medium-only, td.hide-for-medium-only, th.show-for-medium-up, td.show-for-medium-up, th.hide-for-medium, td.hide-for-medium, th.hide-for-medium-down, td.hide-for-medium-down, th.hide-for-large-only, td.hide-for-large-only, th.show-for-large-up, td.show-for-large-up, th.hide-for-large, td.hide-for-large, th.hide-for-large-down, td.hide-for-large-down, th.show-for-xlarge-only, td.show-for-xlarge-only, th.show-for-xlarge-up, td.show-for-xlarge-up, th.show-for-xlarge, td.show-for-xlarge, th.show-for-xlarge-down, td.show-for-xlarge-down, th.hide-for-xxlarge-only, td.hide-for-xxlarge-only, th.hide-for-xxlarge-up, td.hide-for-xxlarge-up, th.hide-for-xxlarge, td.hide-for-xxlarge, th.show-for-xxlarge-down, td.show-for-xxlarge-down {
    display: table-cell !important; } }
/* xxlarge displays */
@media only screen and (min-width: 120.0625em) {
  .hide-for-small-only, .show-for-small-up, .hide-for-small, .hide-for-small-down, .hide-for-medium-only, .show-for-medium-up, .hide-for-medium, .hide-for-medium-down, .hide-for-large-only, .show-for-large-up, .hide-for-large, .hide-for-large-down, .hide-for-xlarge-only, .show-for-xlarge-up, .hide-for-xlarge, .hide-for-xlarge-down, .show-for-xxlarge-only, .show-for-xxlarge-up, .show-for-xxlarge, .show-for-xxlarge-down {
    display: inherit !important; }

  .show-for-small-only, .hide-for-small-up, .show-for-small, .show-for-small-down, .show-for-medium-only, .hide-for-medium-up, .show-for-medium, .show-for-medium-down, .show-for-large-only, .hide-for-large-up, .show-for-large, .show-for-large-down, .show-for-xlarge-only, .hide-for-xlarge-up, .show-for-xlarge, .show-for-xlarge-down, .hide-for-xxlarge-only, .hide-for-xxlarge-up, .hide-for-xxlarge, .hide-for-xxlarge-down {
    display: none !important; }

  .hidden-for-small-only, .visible-for-small-up, .hidden-for-small, .hidden-for-small-down, .hidden-for-medium-only, .visible-for-medium-up, .hidden-for-medium, .hidden-for-medium-down, .hidden-for-large-only, .visible-for-large-up, .hidden-for-large, .hidden-for-large-down, .hidden-for-xlarge-only, .visible-for-xlarge-up, .hidden-for-xlarge, .hidden-for-xlarge-down, .visible-for-xxlarge-only, .visible-for-xxlarge-up, .visible-for-xxlarge, .visible-for-xxlarge-down {
    position: static !important;
    height: auto;
    width: auto;
    overflow: visible;
    clip: auto; }

  .visible-for-small-only, .hidden-for-small-up, .visible-for-small, .visible-for-small-down, .visible-for-medium-only, .hidden-for-medium-up, .visible-for-medium, .visible-for-medium-down, .visible-for-large-only, .hidden-for-large-up, .visible-for-large, .visible-for-large-down, .visible-for-xlarge-only, .hidden-for-xlarge-up, .visible-for-xlarge, .visible-for-xlarge-down, .hidden-for-xxlarge-only, .hidden-for-xxlarge-up, .hidden-for-xxlarge, .hidden-for-xxlarge-down {
    clip: rect(1px, 1px, 1px, 1px);
    height: 1px;
    overflow: hidden;
    position: absolute !important;
    width: 1px; }

  table.hide-for-small-only, table.show-for-small-up, table.hide-for-small, table.hide-for-small-down, table.hide-for-medium-only, table.show-for-medium-up, table.hide-for-medium, table.hide-for-medium-down, table.hide-for-large-only, table.show-for-large-up, table.hide-for-large, table.hide-for-large-down, table.hide-for-xlarge-only, table.show-for-xlarge-up, table.hide-for-xlarge, table.hide-for-xlarge-down, table.show-for-xxlarge-only, table.show-for-xxlarge-up, table.show-for-xxlarge, table.show-for-xxlarge-down {
    display: table !important; }

  thead.hide-for-small-only, thead.show-for-small-up, thead.hide-for-small, thead.hide-for-small-down, thead.hide-for-medium-only, thead.show-for-medium-up, thead.hide-for-medium, thead.hide-for-medium-down, thead.hide-for-large-only, thead.show-for-large-up, thead.hide-for-large, thead.hide-for-large-down, thead.hide-for-xlarge-only, thead.show-for-xlarge-up, thead.hide-for-xlarge, thead.hide-for-xlarge-down, thead.show-for-xxlarge-only, thead.show-for-xxlarge-up, thead.show-for-xxlarge, thead.show-for-xxlarge-down {
    display: table-header-group !important; }

  tbody.hide-for-small-only, tbody.show-for-small-up, tbody.hide-for-small, tbody.hide-for-small-down, tbody.hide-for-medium-only, tbody.show-for-medium-up, tbody.hide-for-medium, tbody.hide-for-medium-down, tbody.hide-for-large-only, tbody.show-for-large-up, tbody.hide-for-large, tbody.hide-for-large-down, tbody.hide-for-xlarge-only, tbody.show-for-xlarge-up, tbody.hide-for-xlarge, tbody.hide-for-xlarge-down, tbody.show-for-xxlarge-only, tbody.show-for-xxlarge-up, tbody.show-for-xxlarge, tbody.show-for-xxlarge-down {
    display: table-row-group !important; }

  tr.hide-for-small-only, tr.show-for-small-up, tr.hide-for-small, tr.hide-for-small-down, tr.hide-for-medium-only, tr.show-for-medium-up, tr.hide-for-medium, tr.hide-for-medium-down, tr.hide-for-large-only, tr.show-for-large-up, tr.hide-for-large, tr.hide-for-large-down, tr.hide-for-xlarge-only, tr.show-for-xlarge-up, tr.hide-for-xlarge, tr.hide-for-xlarge-down, tr.show-for-xxlarge-only, tr.show-for-xxlarge-up, tr.show-for-xxlarge, tr.show-for-xxlarge-down {
    display: table-row; }

  th.hide-for-small-only, td.hide-for-small-only, th.show-for-small-up, td.show-for-small-up, th.hide-for-small, td.hide-for-small, th.hide-for-small-down, td.hide-for-small-down, th.hide-for-medium-only, td.hide-for-medium-only, th.show-for-medium-up, td.show-for-medium-up, th.hide-for-medium, td.hide-for-medium, th.hide-for-medium-down, td.hide-for-medium-down, th.hide-for-large-only, td.hide-for-large-only, th.show-for-large-up, td.show-for-large-up, th.hide-for-large, td.hide-for-large, th.hide-for-large-down, td.hide-for-large-down, th.hide-for-xlarge-only, td.hide-for-xlarge-only, th.show-for-xlarge-up, td.show-for-xlarge-up, th.hide-for-xlarge, td.hide-for-xlarge, th.hide-for-xlarge-down, td.hide-for-xlarge-down, th.show-for-xxlarge-only, td.show-for-xxlarge-only, th.show-for-xxlarge-up, td.show-for-xxlarge-up, th.show-for-xxlarge, td.show-for-xxlarge, th.show-for-xxlarge-down, td.show-for-xxlarge-down {
    display: table-cell !important; } }
/* Orientation targeting */
.show-for-landscape,
.hide-for-portrait {
  display: inherit !important; }

.hide-for-landscape,
.show-for-portrait {
  display: none !important; }

/* Specific visibility for tables */
table.hide-for-landscape, table.show-for-portrait {
  display: table !important; }

thead.hide-for-landscape, thead.show-for-portrait {
  display: table-header-group !important; }

tbody.hide-for-landscape, tbody.show-for-portrait {
  display: table-row-group !important; }

tr.hide-for-landscape, tr.show-for-portrait {
  display: table-row !important; }

td.hide-for-landscape, td.show-for-portrait,
th.hide-for-landscape,
th.show-for-portrait {
  display: table-cell !important; }

@media only screen and (orientation: landscape) {
  .show-for-landscape,
  .hide-for-portrait {
    display: inherit !important; }

  .hide-for-landscape,
  .show-for-portrait {
    display: none !important; }

  /* Specific visibility for tables */
  table.show-for-landscape, table.hide-for-portrait {
    display: table !important; }

  thead.show-for-landscape, thead.hide-for-portrait {
    display: table-header-group !important; }

  tbody.show-for-landscape, tbody.hide-for-portrait {
    display: table-row-group !important; }

  tr.show-for-landscape, tr.hide-for-portrait {
    display: table-row !important; }

  td.show-for-landscape, td.hide-for-portrait,
  th.show-for-landscape,
  th.hide-for-portrait {
    display: table-cell !important; } }
@media only screen and (orientation: portrait) {
  .show-for-portrait,
  .hide-for-landscape {
    display: inherit !important; }

  .hide-for-portrait,
  .show-for-landscape {
    display: none !important; }

  /* Specific visibility for tables */
  table.show-for-portrait, table.hide-for-landscape {
    display: table !important; }

  thead.show-for-portrait, thead.hide-for-landscape {
    display: table-header-group !important; }

  tbody.show-for-portrait, tbody.hide-for-landscape {
    display: table-row-group !important; }

  tr.show-for-portrait, tr.hide-for-landscape {
    display: table-row !important; }

  td.show-for-portrait, td.hide-for-landscape,
  th.show-for-portrait,
  th.hide-for-landscape {
    display: table-cell !important; } }
/* Touch-enabled device targeting */
.show-for-touch {
  display: none !important; }

.hide-for-touch {
  display: inherit !important; }

.touch .show-for-touch {
  display: inherit !important; }

.touch .hide-for-touch {
  display: none !important; }

/* Specific visibility for tables */
table.hide-for-touch {
  display: table !important; }

.touch table.show-for-touch {
  display: table !important; }

thead.hide-for-touch {
  display: table-header-group !important; }

.touch thead.show-for-touch {
  display: table-header-group !important; }

tbody.hide-for-touch {
  display: table-row-group !important; }

.touch tbody.show-for-touch {
  display: table-row-group !important; }

tr.hide-for-touch {
  display: table-row !important; }

.touch tr.show-for-touch {
  display: table-row !important; }

td.hide-for-touch {
  display: table-cell !important; }

.touch td.show-for-touch {
  display: table-cell !important; }

th.hide-for-touch {
  display: table-cell !important; }

.touch th.show-for-touch {
  display: table-cell !important; }

/* Screen reader-specific classes */
.show-for-sr {
  clip: rect(1px, 1px, 1px, 1px);
  height: 1px;
  overflow: hidden;
  position: absolute !important;
  width: 1px; }

.show-on-focus {
  clip: rect(1px, 1px, 1px, 1px);
  height: 1px;
  overflow: hidden;
  position: absolute !important;
  width: 1px; }
  .show-on-focus:focus, .show-on-focus:active {
    position: static !important;
    height: auto;
    width: auto;
    overflow: visible;
    clip: auto; }

/* Print visibility */
.print-only,
.show-for-print {
  display: none !important; }

@media print {
  .print-only,
  .show-for-print {
    display: block !important; }

  .hide-on-print,
  .hide-for-print {
    display: none !important; }

  table.show-for-print {
    display: table !important; }

  thead.show-for-print {
    display: table-header-group !important; }

  tbody.show-for-print {
    display: table-row-group !important; }

  tr.show-for-print {
    display: table-row !important; }

  td.show-for-print {
    display: table-cell !important; }

  th.show-for-print {
    display: table-cell !important; } }

  </style>
</head>
<body>

  <header><h3>TAW -PHP MVC</h3></header>

  <?php include("modules/navegacion.php") ?>
  <section>
    <?php
      $mvc = new MvcController();
      $mvc->enlacesPaginasController();
    ?>
  </section>

</body>
</html>

