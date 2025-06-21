<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./style.css">
    <script type="text/javascript" src="script.js" defer></script>
</head>
<body>
    <nav id="sidebar">
        <ul>
            <img id="Logo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACoCAMAAABt9SM9AAAAolBMVEX///8AOKgALaUANacAKqQAMKYALKUANKcAJqMAH6IAMqb7/f4AKKQAJaMAHqIAL6YAGqGgrdeaqNX09vuNnM/n6/V4ise2wODg5vMAFqDp7fast9vHz+eHl83a4PBcc75rf8LGzufR1+saRKxQarp/kMqxvN40VbJEYLaUotIuULC9xuNugsQAAJxle8EQP6smSq5IZLc8WrRWbrswU7IADqDwLKy5AAAQzklEQVR4nO1daWOquhYthClIAMV5wLnaatXW0///154kEDJhPfd1Csf15V4BOWZ1Z2dP2Xl4uOOOO+6447+jMUwX4/EiHTZ++pf8erT/OCFECEEYms/TO19X8ScyKNz35Kd/zu/Gm1uSZcR3sngkoxX7cVNJ1uzQ+8e5W+yRF4+ZCzxZjM4aDiIPnXvf/gt/DUYneFFR/pa5VEnW2rxcsJHT/jfFa2QgwkyYlheryEoguQQc2P731sj5CYGcE3taXv5TQVYroFcDMP+B3/uD6J9DhpWwQ2/wZJVfMEB5GcT7f0q4miHDiRF188ud9MSQYnjz3jzFOuoRsc8D4wd/+g8gYkkxYPIwHB1OKITcZQN5CMan7uLhmRU4w2v+9M//XrQddvT27AwDmyeqlKMIbmzuivNPzcLL6jbghm/7aqLovGNhtX/61383ZlEFMR9j8M+ZWmn8X7miy8E/hK37MS9KxP2f/unfgSfu0xh9zIsK9oF7zXrxnUP4LjQ24fOw/NjZ2x8TowI4PTJvncK4hs5142QbvlMEGBrrUKnggW0GF9sqA/IC01dZEwBu6UTcWhd9/1jxT2qLjKvMUWnhT6lrySS4DoLGed3sjdO0n6bjXnN9NiByZN3mx8QqTZ4x4/HuJ0f2BdjmggQzp3k3kCTGD+CmPZdtgmTe3sBA4ivMVsShkc9kNmxRA3S9YpjOKdkNxLE78etoWPnl4WgbO8I30OGhbxaWLIjqZHk9MkaV7wraCnhOu/PBCzoTLxDM+DOj0OzNtwzjW9CXRImhCh1HN72kafB08a71+ouH8H04VduflqGgqjMepwpfuWmale/hAvk6Yx1UDdGNJ/LjrWWIEHT28tRMunFFZMIAfj3U1uKliiv0Jnsu/aNHCIliRdRqsRQ1fUHWe02srSZUBmBA2JKfTWE5ZWNVKGYfqt4VGbXxevrPnjw++6iwjhqAVW8DVWaiB2UNiFZ1CgdOJDM0eFWNr82pN3BUvatvCF4lGChEVGcsDF7ZhOqglCCBUOnINJ45Sy0y6mXAZ5iFjHDFallYQEEV8ZTSkq0twzw612kKFtgFdPrEhXE1cTi1NBKMDJfN7D/00LKQoW1hcYEK2rVH8op4rvrLAMR75ommSNaf8l7jEF7ssoKaPN8TgfpNwQLEiAhzA2o3yNY1h1kVHwWd5ZflSAsDCxPMU/2NZfYmWMspWCAzIgo/rgg+gNKeSgUjyqEGfruw3YOcv04AajsFKSYv+WgXZSTC2xTxmSNvYYS5qTnclCIXzMi1+XuNp2CBMXHihhbDizvItdiIWw6Lyq3RgHUBYD6LmypvcKGrJZ8crvzpT7wLBM9k6FvWhCLVNclUMCgGla8dbwdvnzyI70IrDLdV4fGuGISPTPxocqI3XOLtzH0xtQEMtVrfbS7rR6ipaLnAcJHRUs2W3rshAoTYiGgc4qxCBPi5UbVWRGXQVPHKxyXKhNU+f+WQvgykpgoEsCtPm4YqMmUdsVSk+6OH3BUOufRPilgYepXi9Y2mURQSDqqD+b8YtIgvCl/l8MHclhOH1IhIcmlsxnKEwZUjO8lT5FHuHUU88deDrfy4zCkpkpdMFZEpb8PER6nFzyI4iQHDZI3YlRW4Xzywr8CaC5hfZuNajBM/IjmD75bx0Z3iNojFzESnOxAi80jD+lwgKiUzXglCMdwqRAeuyBzcK2qSTEPMS7Tfpdkc7R90gxhtyRBLS34zliPOUXQxIhZHRbA9PEgvUPwzGpbntuXBmorknmq5A2H3SbFY2lBVL3OUH4TauUFvssjkJQkH3vCahApeFGKFtrxN0CIfFX+UQLdi5oZcJgNO+E5vEPASopxxIlwhwpCs3kltnGIemrNvGeLnIX2JRIFxiBG1BBfdwz+8r8ydUmFZ8lNrZ9kgIv/rCt/1YaSbZD0s1gCa/M4AbJ/vsgXQdHkPbh5dLQMUDYaLS3S5ioiAHtivAguu9KzWWkyOocOUuuCLRJeBAW9nJ2fF4lkg8nmDYeFiy8p/xZ+YuL0PjQ/rcX4x0jbdjONjD7dfmO3eM290jVDVvoFQ2FdOXesQq/iU0uyf9RSqEr3iD29hhdykit8XahmGb8ryZR/yRQzpkkqSh+dhg35G2teGzAqVQrwQVsOgV350rVAWLvTGGwxPg9K1zl1mKrue9rUh1GiEeNTcfkLb4o0IyUJ1Y752vsNJX14RT/m3dd96MaQaxcSfeYMbhDP+8TVXIyjWjoz4cpw8RE/NUlf3YslFIQq5SeoKNoIj1AotGGPW5ePpyUpYMV1SN1Iuh/73jOnLMC/IIovhRY0LeVQgFP8xE5HfeHKxQ/lv+ojoqB2dms43Deqr0Cu4oQqlLZrrwR/GNmpUkNWYiS4kVf0LYabrC0qWSQUoT8Qz0yksjYgKsqTvgFL19wuyAPiuUX0RKFlOWfOYlXjwgNSIUJO1FmvhLEb1d6hkHecLHRtJNdL5Y2ty2J7o8Bw2avAomuthYXsryRqKiTOu9KZTUu/BMDi+HdZ6bRTbvSDPMm1mEwRHFle8kAEpyZrlFxNeEm3EuTUd/i7wbaRX7lCsSiu8nRK8nr9O1pCjA614w78v+eC2Kgn7eyFWpbEKPgcX81OSRTMPLFk+FKNVqfZkSYFSeRs4q+c/IKukI3iW9hnI+4eFncG/HbJkqf7ajzSNdatkIUW6uScV2WtGlqyz3GfFY1QA1TpLIst5UrykJUmxrVfmcCdvqbAVj9FxekqyiplLyVLmbbpSSFqzcgdZ6eYhGh6fQpacdAtu28H4W5DIuXdVCcJ1sqLbyJKrcXSrdjCk5JZoaGX4DLJkM8uAmvUUmUqKxF/JT5VkFQ4KR1aRALtK1khWj/CrRvVFkJcow5R93M8ga0+noWmZke+CIs6oDxaxbVpZ748y5g7l0tjPIItOeLPdnOxXz4Yz0Ms1vAx6e5i0euM0YQYjF9FcJ8u8haxy3S2W28ZQy6pSjC1tVSHXTX0CWRMaFbS+bgzfhnI08jz8gKzCtrxGFhVc1QKiHcZ0ntCQC8X/T1b5du2qspQoI4BSy/IbyepUk3W2K1+uJcraPMkPvk6W8zFZHeopaBZpqEJSxpvEBqMfkFXkOKrJ6lIjS2GYaIkyEhgImyP+X7LKqCBQRYB0xK7M+Vm8aFGygv9GVmm9G/ZZX+uqRH/LeLoOb5helyzqeleRxfU6tQfaN4pPuvy2gAEXEPg/yRIiWRbQK18oomkJZds+VxZUklXUof0NWSMxUwHgVrv9AhTzpVz5iFgd/wFZxaNqsoaKml3/XVvTdKMq2I6ZP/51smgSu68ka6uq2IXadmhTxOUMw10yJ1PcJllKstqqel11XyQt0FDWH0dluOnWaVhMOIasubLrtyp2rQsmyl05iNoPt0qWTFZf3SEdauwgJuqem3SXc7O4fyNZsLgyFHfsEGiWMBTQVTfLpKV+o3zHuJqs4qmCLK8IWSVH9XYMpLVZyjjRBnugB91d0V9aN5MV0nQ+y5VdbryHeiVXJTQLttzwsGTZolWT68zEv4EsBxVUdGxm5wHqjY/5omtzrcl0xIYIATot2L5Glwuz4ol0G7ofkQUsuC509xwxpPtZtKFF9ukj7V3pYcaQQ6oPONPI+kNXrvH2pZAaliy69vVfoif6cIur8Sa+ZnIYuLVoC78b2PE6V7wr1pTwmdLQBT2CQEVWp9RFQmMM2jxw8fyu9UpYoFWeovDwh1sdw5lkFinJKtHjt7yGTI9c7beESWhsuSq3yBSH2MBlzlFkWgF6EZvOdFb8WWKDuh/txJeeAbQRYuf98WNr0u1OWqP8ADqKZB3zjrmlrdN8K0ZCxYgfv96UahhOoOg7OXUXLIVP54dvH0Y4FweJqky91ySjU4WTyk/xkT+5EuJMn5ZQ2cqgqp9dTVB16AAww+NkoRj6cNcFoVXVI8PUa3fA32F85eg5YCL02t6VWj1prVdG6EmdR1iE9TMYCjSknloCfMcrbcvGu/r4Kw76uzhVOFSfbkLBWKKKbk8yvX+u/Hs6Yyyc/OGruPPKlVGVkTAt/mJQh6osJXrctjn7/KToy4ZKc+AgLYEXLzN5Zr/j6VY++hdI/XL8wEoe+m9SkxCmrZrQR8y1BtMOX/cO9dqk85dobGl2jJzBNH+FHu8blxqb2y0VwecnskufxhNBrHEu5yZM8qkYFCmepMdNNyaMPmeiMdG6JHFFnrctzXad/AcsjpnA+Ew9FTux2JJmdrcU6wcm2QlrIFxpnPa6He3QNmKm8UWPkSB2d0TCkOWz8fV5DDyjBnHRmzCcvrCW9xPbf+aVucG1zGdf0HU1z+P8FbhwAVO/x9fRnhhLg2s+Wmv/+To2TGYrYksDV4xoabbh8svAWghcZceaFTndO4l9DriiNE6AWoxVqt2+uK8B18OW65zSY2VO//aHn4ER28IIsap/UdoUtvde8xjybei0l2FQVI1wix4uYgNuFEDzPLoLVo5+83CCEAWOPWA5abzAEB5fuyPV2b//NBrprjnZ8yel7dLOnaY77rjjjjvuuOOOa2gMh50MfYKLkZmQ/7ng8h/63HC0nu2fitj6MH+835HN95TcqaMZ9joIc8ALwvhCXxTDHHERd09Xg8CMbAfm2YxhHJInwtg9N4fCG7MbL9rumKuG0HsMd/CmRxDQ6MsIV/Y53sVRzJs0lN1GgB3AKbsLlrRF1L4FvAI7GFn5+eS+Y1lBFuEjwWQ7CDxIyBpnTYGB0+41D+idJcvxPFzobrM1pI8kfAM1Pg2lAjNj3RrtbSxUrWbrmOVXMVl4X0CfxN2zOhBgEJaaDFnO06636+LSW+Z80TyKatXvKGkc0cMJZpz/wwdj4kpcq9Q5+MBtofUrJouEuFJcroTofRsYWejerWkVTUkWBiGrFAycfxaCx4QsUpRMUrGDPAQ4hsbxNWMr1Ky/340QyYr4/ATZ2+vM2K+sGbJInUiRbO3aURerLWWfV/3xAVkPZNOYs2QqGDiyyObfvHDEMuAYb/1065nIwP2Wy72mmCx7P9/N85nVI/YFgBuatODIImySYrc5ys5gwNVucS3noYosw0YoLgrSZnk5kguL1tyErELUcM7VwqJ5sLMed6P6zkNMlimQ5dq2QzP2hyIp5g+IcBGyCkHDpUm4EWAS4MwG7timcXeCKxDIwoaSu+12t2Wp4wgVNSKkVQZP1pSS1UOkBdQKr4f6tlSphoosbGcxg02eAkKXj/U2Jou2En5ziyXhbIPNfr/vbl2jplt4VGQ5sgHeJjtVw0ztE7KK+mVcP5J9yg4AAXYURfhKLeehSmcpyHpIsUOIix44slJqOoy8bGFAEEL8aF062LEgZNGSokqyyCInk4U/uJlRunXt7gIDm/jSWSI1AG79J5JVrvtluAqXOGCDgZBFqgQ71N0ZDmiVJY791HEeYrIinqzCN0yHD/PTnL2Dj36flGQNj5mCCmb4RT49zA/bXjWchyJZOGIz7c0X8+bqJRMSeJzMO+m4m9mmHn4OkxVN5rtd28Jc4YrTjVvOXjxlI8U58ZpDJVmG7100tWVlcaolAOZFaaPsukf8ZRL8ixDysBM9wBsq+rC0Jh5SHKtwv3ssX44usm3bo+b6yrIpcG+79cAjtoDvFIds773yGSt8I7NtGti029HDY5iZEGHdTK1kephdMM1N0MVqWmKFaRj2us9WCP23du4a9qezA8F0emjlX9zhL+ZZncZhts9wqKMV/yEajTomt+644447fgD/A/koJHnxtMfLAAAAAElFTkSuQmCC" alt="">
            <li>
                <button onclick="toggleSidebar()" id="toggle-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
                    <span>Menu</span>
                </button>
            </li>
            <li>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg>
                    <span>Home</span>                    
                </a>
            </li>
            <li>
                <button onclick=toggleSubMenu(this) class="dropdown-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M440-240h80v-120h120v-80H520v-120h-80v120H320v80h120v120ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z"/></svg>
                    <span>Add Form</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg>
                </button>
                <ul class="sub-menu">
                    <div>
                        <li><a href="#">RIS</a></li>  
                    </div>
                </ul>
            </li>
            <li>
                <button onclick=toggleSubMenu(this) class="dropdown-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M160-240v-480 480Zm0 80q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h240l80 80h320q33 0 56.5 23.5T880-640v132q-19-8-39.5-10.5t-40.5.5v-122H447l-80-80H160v480h324l-4 4v76H160Zm400 80v-123l221-220q9-9 20-13t22-4q12 0 23 4.5t20 13.5l37 37q8 9 12.5 20t4.5 22q0 11-4 22.5T903-300L683-80H560Zm300-263-37-37 37 37ZM620-140h38l121-122-18-19-19-18-122 121v38Zm141-141-19-18 37 37-18-19Z"/></svg>
                    <span>Manage Form</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg>
                </button>
                <ul class="sub-menu">
                    <div>
                        <li><a href="#">RIS</a></li>  
                        <li><a href="#">Stock Card</a></li>
                    </div>
                </ul>
            </li>
            <li>
            <button onclick=toggleSubMenu(this) class="dropdown-btn">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M480-480ZM202-65l-56-57 118-118h-90v-80h226v226h-80v-89L202-65Zm278-15v-80h240v-440H520v-200H240v400h-80v-400q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H480Z"/></svg>
                <span>Export Form</span>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg>
            </button>
                <ul class="sub-menu">
                    <div>
                        <li><a href="#">RSMI</a></li>  
                        <li><a href="#">RPCI</a></li>
                    </div>
                </ul>
            </li>

            <li>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M200-80q-33 0-56.5-23.5T120-160v-451q-18-11-29-28.5T80-680v-120q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v120q0 23-11 40.5T840-611v451q0 33-23.5 56.5T760-80H200Zm0-520v440h560v-440H200Zm-40-80h640v-120H160v120Zm200 280h240v-80H360v80Zm120 20Z"/></svg>
                    <span>Inventory List</span>
                </a>
            </li>
        </ul>
    </nav>

</body>
</html>