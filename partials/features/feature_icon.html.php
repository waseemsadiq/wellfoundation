<?
switch ($feature_icon) :
  case 'water': ?>
<svg class="relative w-20 h-20" viewBox="0 0 58 58" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-1TriangleIcon1">
            <stop stop-color="#32FBFC" offset="0%" />
            <stop stop-color="#3214F2" offset="100%" />
        </linearGradient>
        <filter x="-14%" y="-10%" width="128%" height="128%" filterUnits="objectBoundingBox" id="filter-3TriangleIcon1">
            <feOffset dy="2" in="SourceAlpha" result="shadowOffsetOuter1" />
            <feGaussianBlur stdDeviation="2" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
            <feColorMatrix values="0 0 0 0 0.141176471 0 0 0 0 0.031372549 0 0 0 0 0.501960784 0 0 0 0.15 0" in="shadowBlurOuter1" />
        </filter>
        <path d="M17.947 0h14.106c6.24 0 8.503.65 10.785 1.87a12.721 12.721 0 015.292 5.292C49.35 9.444 50 11.707 50 17.947v14.106c0 6.24-.65 8.503-1.87 10.785a12.721 12.721 0 01-5.292 5.292C40.556 49.35 38.293 50 32.053 50H17.947c-6.24 0-8.503-.65-10.785-1.87a12.721 12.721 0 01-5.292-5.292C.65 40.556 0 38.293 0 32.053V17.947c0-6.24.65-8.503 1.87-10.785A12.721 12.721 0 017.162 1.87C9.444.65 11.707 0 17.947 0z" id="path-2TriangleIcon1" />
    </defs>
    <g id="Page-1TriangleIcon1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Desktop-HDTriangleIcon1" transform="translate(-291 -1278)">
            <g id="FeaturesTriangleIcon1" transform="translate(170 915)">
                <g id="Group-9TriangleIcon1" transform="translate(0 365)">
                    <g id="Group-8TriangleIcon1" transform="translate(125)">
                        <g id="Rectangle-9TriangleIcon1">
                            <use fill="#000" filter="url(#filter-3TriangleIcon1)" xlink:href="#path-2TriangleIcon1" />
                            <use fill="url(#linearGradient-1TriangleIcon1)" xlink:href="#path-2TriangleIcon1" />
                        </g>

                        <g transform="matrix(0.0688385,0,0,0.0772721,23.0032,24.7885)" fill="#FFF" fill-rule="nonzero">
                            <g transform="matrix(1,0,0,1,-118.232,-118.232)">
                                <path d="M174.432,32.465C167.632,22.465 161.632,13.265 156.032,4.865C155.232,3.665 154.032,2.465 152.832,1.665C148.032,-1.535 141.632,0.065 138.432,4.865C133.232,13.265 127.232,22.065 120.032,32.465C88.432,78.865 41.232,148.865 41.232,188.865C41.232,218.065 53.232,244.465 72.432,263.665C91.632,282.465 118.032,294.465 147.232,294.465C176.432,294.465 202.832,282.465 222.032,263.265C241.232,244.065 253.232,217.665 253.232,188.465C253.232,148.465 206.032,78.865 174.432,32.465ZM207.632,248.865C192.032,264.465 170.832,273.665 147.232,273.665C123.632,273.665 102.432,264.065 86.832,248.865C71.232,233.265 62.032,212.065 62.032,188.465C62.032,154.865 107.232,88.065 137.232,43.665C140.832,38.465 144.032,33.265 147.232,28.865C150.432,33.265 153.632,38.465 157.232,43.665C187.232,88.465 232.432,154.865 232.432,188.465C232.432,212.065 222.832,233.265 207.632,248.865Z"/>
                            </g>
                        </g>
                        <g transform="matrix(1,0,0,1,-118.232,-118.232)">
                            <path d="M209.232,181.265C203.632,180.865 198.832,185.265 198.432,190.865C198.032,199.665 195.232,208.065 190.832,215.265C186.432,222.465 180.032,228.865 172.432,232.865C167.632,235.665 165.632,242.065 168.432,246.865C171.632,252.465 178.032,254.065 182.832,251.265C193.632,245.265 202.432,236.465 208.432,226.465C214.832,216.465 218.432,204.465 218.832,192.065C219.232,186.465 214.832,181.665 209.232,181.265Z"/>
                        </g>
                    </g>
                </g>
            </g>
        </g>
    </g>
</svg>
<?    break;
  case 'something': ?>
    code to be executed if n=label2;
<?    break;
  case 'anotherthing': ?>
    code to be executed if n=label3;
<?    break;
  default: ?>
<!-- no feature returned -->
<? endswitch; ?>