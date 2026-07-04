<?php
// WE3 Streaming Platform - PHP Backend
session_start();
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>WE3 - استریم زنده</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
    <style>
        body { background: #0f172a; color: white; }
    </style>
</head>
<body class="min-h-screen">
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold text-center mb-8">WE3 - پلتفرم استریم بومی</h1>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Player -->
            <div class="lg:col-span-2">
                <video id="player" controls class="w-full aspect-video bg-black rounded-xl" autoplay></video>
            </div>
            
            <!-- Controls & Chat Placeholder -->
            <div>
                <div class="bg-zinc-900 p-4 rounded-xl">
                    <h2 class="text-xl mb-4">کنترل‌ها</h2>
                    <input type="text" id="streamKey" placeholder="Stream Key" class="w-full p-3 bg-zinc-800 rounded mb-4">
                    <button onclick="startStream()" class="bg-green-600 hover:bg-green-700 w-full py-3 rounded font-bold">شروع پخش</button>
                </div>
                
                <div class="mt-6 bg-zinc-900 p-4 rounded-xl">
                    <h3 class="mb-3">چت (در حال توسعه)</h3>
                    <div id="chat" class="h-64 overflow-y-auto bg-black p-3 rounded"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Simple HLS Player
        function initPlayer() {
            const video = document.getElementById('player');
            if (Hls.isSupported()) {
                const hls = new Hls();
                hls.loadSource('/hls/stream.m3u8');
                hls.attachMedia(video);
            } else {
                video.src = '/hls/stream.m3u8';
            }
        }
        window.onload = initPlayer;

        function startStream() {
            alert('در OBS به rtmp://your-ip/live متصل شو و stream key رو وارد کن!');
        }
    </script>
</body>
</html>