<?php

// session_start();
require "autoload.php";
define("CONSUMER_KEY", "bZQdYU4N8aUUWCv29shEG66VY");
define("CONSUMER_SECRET", "6tKqSD3BCrWsy9b4M5tOHHzuaAFDXw9zLpQDepn0rkq1P7MM7b");
define("OAUTH_TOKEN", "3624538703-35usmIEkLWQPk7tfuEkAOe1rdru6rYn8gVm3Lfh");
define("OAUTH_TOKEN_SECRET", "xfbUuRevcDdWFdC8e9kQ9o9gmd7bW0wiKLaVBIa3NZXe7");
//define("OAUTH_CALLBACK", ""); //callback url, isi jika dibutuhkan. (optional)
define("WEBHOOK_URL", ""); //https://domain-kamu.com/twitter/webhook.php
define("ENV_LABEL", ""); //Dev environment label

define("TRIGGER_WORD", "boss");
define("ADMIN_ID", ["1635148260359954432", "", ""]); //User ID Admin (optional)
define("MINIMAL_FOLLOWERS", "50");
define("SLEEP_TIME", "300"); //delay ketika post tweet (detik)

define("TRIGGER_OFF", "off"); //tambahkan kata off di bio maka bot akan nonaktif

define("ALERT_NOT_FOLLOW", "[BOT] kamu belum follow base ini");
define("ALERT_NOT_FOLLBACK", "[BOT] kamu belum difollback, tunggu sesi open follback berikutnya");
define("ALERT_MINIMAL_FOLLOWERS", "[BOT] followers kamu minimal " . MINIMAL_FOLLOWERS . " untuk ngirim menfess");
define("ALERT_ERROR_UNSEND", "[BOT] terjadi kegagalan! hubungi admin untuk unsend manual");
define("ALERT_DOUBLE_UNSEND", "[BOT] kamu sudah mengirim menfess sebelumnya. Ketik /unsend [url_menfess] untuk unsend menfess berbentuk thread");
define("ALERT_NOT_SENDER", "[BOT] lo bukan sendernya");
define("ALERT_UNSEND", "[BOT] menfess kamu sudah berhasil dihapus! Ketik /unsend [url_menfess] untuk unsend menfess berbentuk thread");
define("ALERT_OFF", "[BOT] bot sedang off, coba dilain waktu ya");
define("ALERT_BADWORDS", "[BOT] ada kata yang dilarang");
define("ALERT_TRIGGER", "[BOT] gunakan kata " . TRIGGER_WORD . " untuk ngirim menfess");

define("WELCOME_MESSAGE", "[BOT] hai, kamu sudah difollback! baca rules terlebih dahulu sebelum ngirim menfess yaa");
define("PROCESSED_MESSAGE", "[BOT] wait! menfess kamu sedang diproses");
define("DECLINED_MESSAGE", "[BOT] menfess kamu batal dikirim");

define("SUCCESS_ALERT", "[BOT] Menfess kamu berhasil di-Tweet. Ketik /unsend untuk batal mengirim");
define("QUESTION_QUICKREP", "[BOT] pastikan sudah membaca rules, yakin mau kirim menfess ini?");

define("OPTION_SATU", trim(html_entity_decode('&#x1f436;')) . " Yakin");
define('DESCRIPTION_SATU', 'Iya');

define("OPTION_DUA", trim(html_entity_decode('&#x1f431;')) . " Gak");
define("DESCRIPTION_DUA", "Batal");

define("BADWORDS_LIST", ["asu", "anjing", "memek", "kontol", "ewean", "bajingan", "goblog", "goblok", "setan", "pantek", "fwb", "pepek", "lonte", "ewe"]);

if (!CONSUMER_KEY || !CONSUMER_SECRET || !WEBHOOK_URL || !ENV_LABEL) {
    echo 'CONSUMER_KEY, CONSUMER_SECRET, WEBHOOK_URL, and ENV_LABEL variables must be set';
}
