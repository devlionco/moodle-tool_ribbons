<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Language strings
 * @package    tool_ribbons
 * @copyright  2020 onwards Conn Warwicker
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Capabilities.
$string['ribbons:config_ribbons'] = 'הגדרות סרטי סביבה';

// Errors.
$string['error:colour'] = 'קוד הקסדצימלי של הצבע לא תקין';
$string['error:link'] = 'URL לא תקין';
$string['error:maxlength'] = 'הטקסט לא יכול להיות ארוך יותר מאשר {$a} תווים.';
$string['error:required'] = 'שדה זה הוא חובה';
$string['error:ribbon:position'] = 'מיקום לא תקין';
$string['error:ribbon:position:used'] = 'במיקום זה כבר יש סרט';
$string['error:ribbon:type'] = 'סוג לא תקין';

// Standard strings.
$string['data'] = 'מידע';
$string['delete:sure'] = 'האם את/ה רוצה למחוק את <b>{$a}</b>';
$string['disable'] = 'כיבוי';
$string['enable'] = 'הפעלה';
$string['nodata'] = 'אין מידע';
$string['pluginname'] = 'סרטי סביבה';
$string['ribbon'] = 'סרטי סביבה';
$string['ribbons'] = 'סרטי סביבה';
$string['ribbon:colour:bg'] = 'צבע רקע';
$string['ribbon:colour:bg_help'] = 'זה חייב להיות בקוד הקסדצימלי. למשל, #000000';
$string['ribbon:colour:text'] = 'צבע טקסט';
$string['ribbon:colour:text_help'] = 'זה חייב להיות בקוד הקסדצימלי. למשל, #fff';
$string['ribbon:deleted'] = 'סרט סביבה נמחק';
$string['ribbon:link'] = 'היפר קישור';
$string['ribbon:new'] = 'סרט סביבה חדש';
$string['ribbon:position'] = 'מיקום';
$string['ribbon:saved'] = 'סרט סביבה נשמר';
$string['ribbon:type:script_help'] = 'ה-URL ייפתח והטקסט שלו יועבר אל הסרטץ מומלץ שהסקריפט לא יחזיר מעל ל-20 תווים, אחרת יהיה קשה לקרוא את הסרט. <br><br><b>תופסי מיקום אפשריים:</b><br> {www} - Tזה יומר ל-URL של האתר שלך. <br>{userid} - זה יומר ל-ID של המשתמש המחובר.';
$string['ribbon:type:script'] = 'סקריפט URL';
$string['ribbon:type:static'] = 'טקסט סטטי';
$string['type'] = 'סוג';

// Positions.
$string['left-top'] = 'ימין-למעלה';
$string['right-top'] = 'שמאל-למעלה';
$string['left-bottom'] = 'ימין-למטה';
$string['right-bottom'] = 'שמאל-למטה';

// Types.
$string['static'] = 'סטטי';
$string['script'] = 'סקריפט';