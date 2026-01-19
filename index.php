<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Wedding Journey - February 2026</title>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Noto+Sans+KR:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Noto Sans KR', sans-serif;
            background: linear-gradient(135deg, #fce4ec 0%, #f8bbd9 50%, #e1bee7 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            padding: 40px 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            margin-bottom: 30px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        .header h1 {
            font-family: 'Great Vibes', cursive;
            font-size: 3.5rem;
            color: #c2185b;
            margin-bottom: 10px;
        }

        .header p {
            color: #666;
            font-size: 1.1rem;
        }

        .heart-divider {
            text-align: center;
            font-size: 1.5rem;
            color: #e91e63;
            margin: 20px 0;
        }

        .timeline {
            position: relative;
            padding: 20px 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 3px;
            height: 100%;
            background: linear-gradient(to bottom, #e91e63, #9c27b0);
            border-radius: 3px;
        }

        .event {
            display: flex;
            justify-content: flex-end;
            padding: 10px 40px 10px 0;
            position: relative;
            width: 50%;
        }

        .event:nth-child(odd) {
            align-self: flex-end;
            justify-content: flex-start;
            padding: 10px 0 10px 40px;
            margin-left: 50%;
        }

        .event-content {
            background: rgba(255, 255, 255, 0.95);
            padding: 20px 25px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            max-width: 350px;
            position: relative;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .event-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .event-content::before {
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            background: #e91e63;
            border: 3px solid #fff;
            border-radius: 50%;
            top: 25px;
        }

        .event:nth-child(even) .event-content::before {
            right: -48px;
        }

        .event:nth-child(odd) .event-content::before {
            left: -48px;
        }

        .event-date {
            font-weight: 500;
            color: #c2185b;
            font-size: 0.9rem;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .event-title {
            font-size: 1.1rem;
            color: #333;
            margin-bottom: 5px;
        }

        .event-detail {
            font-size: 0.85rem;
            color: #777;
        }

        .event.highlight .event-content {
            background: linear-gradient(135deg, #fce4ec, #f8bbd9);
            border: 2px solid #e91e63;
        }

        .event.highlight .event-content::before {
            background: #ff4081;
            width: 20px;
            height: 20px;
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0%, 100% { box-shadow: 0 0 0 0 rgba(255, 64, 129, 0.4); }
            50% { box-shadow: 0 0 0 10px rgba(255, 64, 129, 0); }
        }

        .wedding-badge {
            display: inline-block;
            background: linear-gradient(135deg, #e91e63, #9c27b0);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-top: 10px;
        }

        .footer {
            text-align: center;
            padding: 30px;
            color: #666;
            font-size: 0.9rem;
        }

        .icon {
            margin-right: 5px;
        }

        @media (max-width: 768px) {
            .timeline::before {
                left: 20px;
            }

            .event,
            .event:nth-child(odd) {
                width: 100%;
                margin-left: 0;
                padding: 10px 10px 10px 50px;
                justify-content: flex-start;
            }

            .event-content::before,
            .event:nth-child(even) .event-content::before,
            .event:nth-child(odd) .event-content::before {
                left: -40px;
                right: auto;
            }

            .header h1 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Our Wedding Journey</h1>
            <p>Germany & Copenhagen, February 2026</p>
            <div class="heart-divider">&#10084; &#10084; &#10084;</div>
        </div>

        <div class="timeline">
            <?php
            $events = [
                [
                    'date' => '2월 12일 (목)',
                    'icon' => '&#9992;',
                    'title' => '한국 → 독일 출발',
                    'detail' => 'ICN → FRA | 현지 도착 17:20',
                    'highlight' => false
                ],
                [
                    'date' => '2월 13일 (금)',
                    'icon' => '&#127970;',
                    'title' => '영사관 방문',
                    'detail' => '11:00 프랑크푸르트',
                    'highlight' => false
                ],
                [
                    'date' => '2월 14-15일',
                    'icon' => '&#128663;',
                    'title' => 'Remscheid로 이동',
                    'detail' => 'mit Herr Yoo',
                    'highlight' => false
                ],
                [
                    'date' => '2월 16일 (월)',
                    'icon' => '&#127881;',
                    'title' => 'Rosenmontag',
                    'detail' => '독일 카니발 축제',
                    'highlight' => false
                ],
                [
                    'date' => '2월 17-20일',
                    'icon' => '&#127968;',
                    'title' => 'Remscheid 체류',
                    'detail' => '가족과 함께',
                    'highlight' => false
                ],
                [
                    'date' => '2월 21일 (토)',
                    'icon' => '&#128663;',
                    'title' => 'Frankfurt로 이동',
                    'detail' => 'mit Frau Im',
                    'highlight' => false
                ],
                [
                    'date' => '2월 22일 (일)',
                    'icon' => '&#9992;',
                    'title' => '코펜하겐으로 출발',
                    'detail' => 'SK 676 | 15:15 출발',
                    'highlight' => false
                ],
                [
                    'date' => '2월 23일 (월)',
                    'icon' => '&#128221;',
                    'title' => '코펜하겐 시청',
                    'detail' => '서류 제출',
                    'highlight' => false
                ],
                [
                    'date' => '2월 24일 (화)',
                    'icon' => '&#128141;',
                    'title' => 'Wedding Day',
                    'detail' => '15:05 결혼식',
                    'highlight' => true
                ],
                [
                    'date' => '2월 25일 (수)',
                    'icon' => '&#128220;',
                    'title' => '아포스티유 & 이동',
                    'detail' => '09:00 아포스티유 | 18:15 Frankfurt행',
                    'highlight' => false
                ],
                [
                    'date' => '2월 26일 (목)',
                    'icon' => '&#127968;',
                    'title' => '귀국',
                    'detail' => '10:30 Eschborn 시청 | 19:30 한국행',
                    'highlight' => false
                ]
            ];

            foreach ($events as $event) {
                $highlightClass = $event['highlight'] ? 'highlight' : '';
                echo "<div class='event {$highlightClass}'>";
                echo "<div class='event-content'>";
                echo "<div class='event-date'><span class='icon'>{$event['icon']}</span>{$event['date']}</div>";
                echo "<div class='event-title'>{$event['title']}</div>";
                echo "<div class='event-detail'>{$event['detail']}</div>";
                if ($event['highlight']) {
                    echo "<span class='wedding-badge'>&#128141; THE BIG DAY</span>";
                }
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>

        <div class="footer">
            <p>Made with &#10084; for our special journey</p>
        </div>
    </div>
</body>
</html>
