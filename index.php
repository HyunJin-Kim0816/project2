<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>참좋은여행</title>
  <!-- 메타데이터 -->
  <meta name="keywords" content="참좋은여행, 직판여행사, 여행정보, 해외여행정보, 패키지, 에어텔, 항공권, 허니문, 호텔, 골프여행 , 배낭여행, FIT여행, 자유여행, 골프여행, 고급여행상품, 테마여행, 크루즈, 국내여행, 제주여행">
  <meta name="description" content="고객의 만족을 최우선으로 생각하는 해외/국내여행 전문기업.">
  <meta property="og:type" content="website">
  <meta property="og:title" content="참좋은여행">
  <meta property="og:url" content="http://www.verygoodtour.com">
  <meta property="og:description" content="고객의 만족을 최우선으로 생각하는 해외/국내여행 전문기업.">
  <meta property="og:image" content="http://www.verygoodtour.com/images/mov2/logo_for_msg.jpg">

  <!-- 파비콘, 기본서식 파일 -->
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./css/common.css" type="text/css">
  <link rel="stylesheet" href="./css/reset.css" type="text/css">
  <link rel="stylesheet" href="./css/main.css" type="text/css">
  
  <!-- 플러그인 추가(jQuery, 폰트어썸) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!--swiper slide-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>
    <?php include ('header.php')?>
    <?php include ('mobile_nav.php') ?>

    <main>
        <section class="top_content">
            <h2 style="display:none">탑 컨텐츠</h2>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="./images/main01.avif" alt="참좋은여행" loading="eager" fetchpriority="high"></div>
                    <div class="swiper-slide"><img src="./images/main02.jpg" alt="참좋은여행" loading="eager" fetchpriority="high"></div>
                    <div class="swiper-slide"><img src="./images/main03.jpg" alt="참좋은여행" loading="eager" fetchpriority="high"></div>
                    <div class="swiper-slide"><img src="./images/main04.jpg" alt="참좋은여행" loading="eager" fetchpriority="high"></div>
                    <div class="swiper-slide"><img src="./images/main05.jpg" alt="참좋은여행" loading="eager" fetchpriority="high"></div>
                    <div class="swiper-slide"><img src="./images/main06.jpg" alt="참좋은여행" loading="eager" fetchpriority="high"></div>
                    <div class="swiper-slide"><img src="./images/main07.jpg" alt="참좋은여행" loading="eager" fetchpriority="high"></div>
                    <div class="swiper-slide"><img src="./images/main08.jpg" alt="참좋은여행" loading="eager" fetchpriority="high"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <form name="travel_search" method="post" class="travel_search">
                <h2>어떤 여행을<br>찾고 계신가요?</h2>
                <div>
                    <span>항공</span>
                    <span>호텔</span>
                    <div class="select_bar"></div>
                    <div class="base_bar"></div>

                    <p>
                        <input type="text" placeholder="어디로 떠나실 예정인가요?" name="where">
                    </p>
                    <p>
                        <label for="start_place"><span style="position: absolute; text-indent:-9999px">출발지 전체</span></label>
                        <select name="start_place" id="start_place">
                            <option value="">출발지 전체</option>
                            <option value="인천/김포">인천/김포</option>
                            <option value="부산">부산</option>
                            <option value="대구">대구</option>
                            <option value="청주">청주</option>
                            <option value="제주">제주</option>
                            <option value="양양">양양</option>
                        </select>
                    </p>
                    <p>
                        <input type="text" placeholder="출발일을 입력하세요.">
                    </p>
                </div>
                <input type="submit" value="검색하기">
            </form>
        </section>

        <!--모바일 전용 메뉴-->
        <nav class="gnb">
            <ul>
                <li><a href="#" title="해외여행"><img src="./images/menu_img1.jpg" alt="" loading="eager" fetchpriority="high">해외여행</a></li>
                <li><a href="#" title="국내/제주"><img src="./images/menu_img2.jpg" alt="" loading="eager" fetchpriority="high">국내/제주</a></li>
                <li><a href="#" title="프리미엄"><img src="./images/menu_img3.jpg" alt="" loading="eager" fetchpriority="high">프리미엄</a></li>
                <li><a href="#" title="지방출발"><img src="./images/menu_img4.jpg" alt="" loading="eager" fetchpriority="high">지방출발</a></li>
                <li><a href="#" title="항공/호텔"><img src="./images/menu_img5.jpg" alt="" loading="eager" fetchpriority="high">항공/호텔</a></li>
                <li><a href="#" title="라르고"><img src="./images/menu_img6.jpg" alt="" loading="eager" fetchpriority="high">라르고</a></li>
            </ul>
        </nav>

        <section class="best_travel">
            <h2>이번주 인기 추전 치역</h2>
            <p class="sec_title">사랑받는 BEST 여행지만 모았어요&#10084;</p>
            <p class="sub_title"><a href="#" title="추천 지역 더보기">더보기</a></p>
            <div class="t_list">
                <ul class="list">
                    <li class="product_list">
                        <a href="#" title="여행지">
                            <img src="./images/best1.jpg" alt="인기 추천 상품" loading="lazy">
                            <p class="product_name">시그니처_[츠에다테 히젠야 특급 온천] 오사카와 규슈를 한번에 4일_팁포함</p>
                            <p class="product_explain">오사카1박+페리1박+규슈1박 두지역을 한번에, 팁 포함</p>
                        </a>
                    </li>
                    <li class="product_list">
                        <a href="#" title="여행지">
                            <img src="./images/best2.jpg" alt="인기 추천 상품" loading="lazy">
                            <p class="product_name">[에미레이트 직항/전 일정 월드체인호텔] 두바이/아부다비 일주 6일 #럭셔리요트투어,노쇼핑,미슐랭 특식</p>
                            <p class="product_explain">럭셔리 요트투어, 전일정 5성급, 노쇼핑, 미슐랭 특식</p>
                        </a>
                    </li>
                    <li class="product_list">
                        <a href="#" title="여행지">
                            <img src="./images/best3.jpg" alt="인기 추천 상품" loading="lazy">
                            <p class="product_name">[예쁜것만 골라담은]스페인/포르투갈/남프랑스+모나코 4국 12일#에즈 선인장마을 #니스자유</p>
                            <p class="product_explain">카르타항공 탑승, 바르셀로나 자유시간, 소도시 론다, 톨레로 관광</p>
                        </a>
                    </li>
                    <li class="product_list">
                        <a href="#" title="여행지">
                            <img src="./images/best4.jpg" alt="인기 추천 상품" loading="lazy">
                            <p class="product_name">[청주출발_다낭호이안] 5성 포포인츠 쉐라톤 #SNS맛집 #신라모노그램 망고빙수 #전신마사지 #바나힐 5일</p>
                            <p class="product_explain">SNS 유명 맛집, 망고빙수, 전신마사지, 바나힐, 오전 자유시간</p>
                        </a>
                    </li>
                    <li>
                        <div class="more">
                            <i class="fa fa-plus"></i>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="popular_travel">
            <h2>가장 인기 많은 여행지</h2>
            <p class="sub_title"><a href="#" title="인기 여행지 더보기">더보기</a></p>
            <div class="t_list">
                <ul class="list">
                    <li class="product_list">
                        <a href="#" title="인기 여행지">
                            <img src="./images/popular1.jpg" alt="인기 여행지" loading="lazy">
                            <p class="product_name">[의창] 장가계/원가계/천문산/천자산+황룡동굴 5일
                            </p>
                            <p class="product_explain">고객 만족도 높은 장가계 상품, 전 일정 VIP 리무진차량+준특급호텔 이용</p>
                        </a>
                    </li>
                    <li class="product_list">
                        <a href="#" title="인기 여행지">
                            <img src="./images/popular2.jpg" alt="인기 여행지" loading="lazy">
                            <p class="product_name">[탐나는 일정] 서유럽 2개국 9일 #리기산 #일급호텔 #스이</p>
                            <p class="product_explain">여행자들의 로망 유럽! 스위스 아이거 익스프레스, 낭만의 도시 파리와 로마까지</p>
                        </a>
                    </li>
                    <li class="product_list">
                        <a href="#" title="인기 여행지">
                            <img src="./images/popular3.jpg" alt="인기 여행지" loading="lazy">
                            <p class="product_name">[꽤 괜찮은 여행] 발칸 동유럽 5개국 11일 # 크슬체오헝 / 프라하 야경 유람선 & 클림트&lt;키스&gt;</p>
                            <p class="product_explain">반짝이는 아드리아행를 따라 만나는 푸르름 속 힐링시간!</p>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <section class="middle_ad">
            <div class="random_banner">
                <a href="#" title="이벤트 바로가기"><img src="./images/pc_banner1.jpg" alt="이벤트 베너" id="ran_banner" loading="lazy"></a>
            </div>
        </section>

        <section class="spring_travel">
            <h2>전세계의 봄을 느껴보세요</h2>
            <p class="sub_title"><a href="#" title="봄 여행지 더보기">더보기</a></p>
            <div class="container list">
                <ul class="tabs">
                    <li class="tab-link current" data-tab="tab-1">동유럽</li>
                    <li class="tab-link" data-tab="tab-2">서유럽</li>
                    <li class="tab-link" data-tab="tab-3">프리미엄 유럽</li>
                    <li class="tab-link" data-tab="tab-4">꽃 피는 봄</li>
                    <li class="tab-link" data-tab="tab-5">살랑 봄바람 여행</li>
                    <li class="tab-link" data-tab="tab-6">초록초록 봄의 기운</li>
                    <li class="tab-link" data-tab="tab-7">특별한 여행</li>
                </ul>
                
                <div id="tab-1" class="tab-content current t_list">
                    <ul class="s_list">
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_e_europe1.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[여행의 맛] 동유럽 3개국 9일 # 체오헝 / 2대궁전, 멜크수도원 내부, 아기자기 소도시</p>
                                <p class="product_explain">부다페스트 직항을 나라별 수도는 여유있게! 소도시까지 빼놓지 않고 관강하는 일정!</p>
                            </a>
                        </li>
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_e_europe2.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[바쁜 일상 속 쉼표] 동유럽 4개국 9일 # 체헝오독 / 2대 야경, 클림트(키스), 로맨틱 ' 할슈타트 '</p>
                                <p class="product_explain">동유럽 소도시까지 관광하는 담당자 추천. 스테디 일정</p>
                            </a>
                        </li>
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_e_europe3.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[노팁 노옵션] 동유럽 3개국 9일 # 체.헝.오 / 일급호텔 / 패키지 속 자유</p>
                                <p class="product_explain">국적기 직항탑승! 노팁 노옵션으로 편안하게. 동유럽 핵심 3개국에 꼭 봐야할 소도시까지 즐길 수 있는 일정</p>
                            </a>
                        </li>
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_e_europe4.jpg" alt="인기 여행지4" loading="lazy">
                                <p class="product_name">[꽤 괜찮은 여행] 발칸 동유럽 5개국 11일 # 크슬체오헝 / 프라하 야경 유람선 & 클림트&lt;키스&gt;</p>
                                <p class="product_explain">반짝이는 아드리아행를 따라 만나는 푸르름 속 힐링시간!</p>
                            </a>
                        </li>
                        <li>
                            <div class="more">
                                <i class="fa fa-plus"></i>
                            </div>
                        </li>
                    </ul>
                </div>

                <div id="tab-2" class="tab-content t_list">
                    <ul class="s_list">
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_s_europe1.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[깊고 진하게] 이탈리아에서 스위스까지 2개국 9일 #융프라우 #체르마트</p>
                                <p class="product_explain">이탈리아 완전일주 + 스위스 청정마을 체르마트와 융프라우 산악열차탑승까지 완변 2개국일주</p>
                            </a>
                        </li>
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_s_europe2.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[탐나는 일정] 서유럽 2개국 9일 #리기산 #일급호텔 #스이</p>
                                <p class="product_explain">여행자들의 로망 유럽! 스위스 아이거 익스프레스, 낭만의 도시 파리와 로마까지</p>
                            </a>
                        </li>
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_s_europe3.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[일급호텔] 서유럽 4개국 10일 / 스위스 융프라우 + 파리 베르사유궁전</p>
                                <p class="product_explain">서유럽 핵심 관광지로 꽉 찬 여행, 버스 이동 최소화로 편안하게</p>
                            </a>
                        </li>
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_s_europe4.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[남프랑스/노쇼핑,노옵션] 프랑스일주 10일 # 파리아울렛, 와이너리투어, 카르카손</p>
                                <p class="product_explain">예술가들의 낭만이 깃든 프로방스의 아름다움을 따라서 찾아가는 여행</p>
                            </a>
                        </li>
                        <li>
                            <div class="more">
                                <i class="fa fa-plus"></i>
                            </div>
                        </li>
                    </ul>
                </div>

                <div id="tab-3" class="tab-content t_list">
                    <ul class="s_list">
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_p_europe1.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[비즈니스/노팁/노옵션/노쇼핑]스위스 일주 9일 ＃알프스 3대 미봉＃수네가 하이킹＃스위스 스파</p>
                                <p class="product_explain">알프스 3대 미봉[리기산, 융프라우, 마테호른] 특식 4회 알프스 스파 포함</p>
                            </a>
                        </li>
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_p_europe2.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[프리미엄or비즈니스/노옵션/노쇼핑/노팁] 파리 근교 여행 9일#루아르고성투어 #몽생미셸</p>
                                <p class="product_explain">남부의 햇살보다 찐한 감동, 북프랑스 여행의 새로운 기준</p>
                            </a>
                        </li>
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_p_europe3.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[비즈니스] 발칸3국(크/슬/몬) 9일 #특급호텔4박 #빈트가르협곡 #피란 #두브로브니크</p>
                                <p class="product_explain">25년 호텔 식사 일정 업그레이드 완료</p>
                            </a>
                        </li>
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_p_europe4.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[노팁/노옵션/노쇼핑] 꿈꾸던 그곳 '북극 탐험' 13일 #스발바르 #북극곰 #피오르드 #크루즈</p>
                                <p class="product_explain">버킷리스트의 마지막 줄 북극탐험! 선착순 무로 비즈니스 업그레이드</p>
                            </a>
                        </li>
                        <li>
                            <div class="more">
                                <i class="fa fa-plus"></i>
                            </div>
                        </li>
                    </ul>
                </div>

                <div id="tab-4" class="tab-content t_list">
                    <ul class="s_list">
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/blossom1.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[고즈넉한 중정, 간사이 파인빌라] 교토/고베/나라/오사카 4일 [유니버셜 스튜디오 선택 가능]</p>
                                <p class="product_explain">꽉찬일정, 우메다 시내 2박, 중정이 아름다운 간사이 파인 빌라 1박</p>
                            </a>
                        </li>
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/blossom2.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[패키지 속 자유] ●큐켄호프 꽃축제● 베네룩스3국, 프랑스까지 4개국 10일 #네덜란드 소도시 #미술관투어</p>
                                <p class="product_explain">매년 3~5월 큐켄호프 꽃 축제, 몽쉘미쉘</p>
                            </a>
                        </li>
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/blossom3.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[VIP리무진버스] 5대캐년 미서부 9일</p>
                                <p class="product_explain">#봄여행 #봄꽃여행 #연휴상품 모음전 #5월연휴 #6월 연휴 #미서부 #미동부 #나이아가라 #퀘백</p>
                            </a>
                        </li>
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/blossom4.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[의창] 장가계/원가계/천문산/천자산+황룡동굴 5일</p>
                                <p class="product_explain">#봄여행 고객 만족도 높은 장가계 상품, 전 일정 VIP 리무진차량+준특급호텔 이용</p>
                            </a>
                        </li>
                        <li>
                            <div class="more">
                                <i class="fa fa-plus"></i>
                            </div>
                        </li>
                    </ul>
                </div>

                <div id="tab-5" class="tab-content t_list">
                    <ul class="s_list">
                        <li class="product_list">
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_windy1.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[여행의 맛] 동유럽 3개국 9일 # 체오헝 / 2대궁전, 멜크수도원 내부, 아기자기 소도시</p>
                                <p class="product_explain">프라하+부다페스타 2대 야경, 멜크수도원 내부, 쇤부른+벨베데러 궁전 내부</p>
                            </a>
                        </li>
                        <li class="product_list">
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_windy2.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[항공이동/마운트쿡 트래킹] 호주/뉴질랜드 남북섬 10일</p>
                                <p class="product_explain">호주, 뉴질랜드 필수 코스가 포함된 베스트 일정</p>
                            </a>
                        </li>
                        <li class="product_list">
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_windy3.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[16명 이상시 인솔자 동행/ 중앙아시아 3국 10일] 카자흐스탄,키르기스스탄,우즈베키스탄 #노쇼핑# 노옵션</p>
                                <p class="product_explain">중앙아시아의 스위수, 아름다운 콜사이 호수 포함, 노쇼핑, 노옵션</p>
                            </a>
                        </li>
                        <li class="product_list">
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_windy4.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[노쇼핑 / 노옵션 +유니버셜 스튜디오] 싱가포르 5일</p>
                                <p class="product_explain">오차로드 위치 특급 호텔 투숙, 유니버셜스튜디오 티켓 포함, 특식 2회</p>
                            </a>
                        </li>
                        <li>
                            <div class="more">
                                <i class="fa fa-plus"></i>
                            </div>
                        </li>
                    </ul>
                </div>

                <div id="tab-6" class="tab-content t_list">
                    <ul class="s_list">
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_green1.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[다낭/호이안] #5성 윈덤 골든베이 #머드온천 #스톤마사지 #바나힐 5일</p>
                                <p class="product_explain">다낭과 호이안의 핵심 관광지, 스톤마사지, 머드 온천 체험, #5성 윈덤 골든베이, 골든브릿지</p>
                            </a>
                        </li>
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_green2.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[패키지 속 자유] 동유럽 3개국 7일 # 체오독 / 비엔나2박</p>
                                <p class="product_explain">비엔나/프라하 자유시간 + 소도시 BEST 3 (체스키크룸로프, 할슈타트, 잘츠부르크) 관광</p>
                            </a>
                        </li>
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_green3.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[비즈니스/노팁/노옵션/노쇼핑]북유럽 4개국 9일 #게이랑에르 #플롬 #크루즈 2박 #국내선1회 #스카이리프트</p>
                                <p class="product_explain">북유럽 프리미엄 1등 상품, 크루즈 객실 업그레이드 및 프리미엄레스토랑 2회</p>
                            </a>
                        </li>
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_green4.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[인생 사진 명소로만 준비한] 발리 4박6일 #핫플레이스 #전일관광</p>
                                <p class="product_explain">NO쇼핑 NO옵션! 요즘 SNS상에 떠오르는 발리 인기명소와 고객님들의 문의가 많은 관광지</p>
                            </a>
                        </li>
                        <li>
                            <div class="more">
                                <i class="fa fa-plus"></i>
                            </div>
                        </li>
                    </ul>
                </div>

                <div id="tab-7" class="tab-content t_list">
                    <ul class="s_list">
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_special1.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[프랑스길 120KM]산티아고 순례길 10일 #전일정1급호텔 #편안한 짐이동 #전문인솔자 동행 #포르투자유시간</p>
                                <p class="product_explain">트레킹 전문 인솔자 동행으로 안전, 전 일정 일급 호텔, 짐 이동으로 편안하게!</p>
                            </a>
                        </li>
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_special2.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[VIP리무진 버스/실시간항공/5개월간 펼쳐지는 비현실공간 옐로스톤] 미서부완전일주 10일</p>
                                <p class="product_explain">특별기획! VIP리무진버스 & 일반버스 선택 가능, 옐로스톤 포함 6대 국립공원 관광</p>
                            </a>
                        </li>
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_special3.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[함께 여서 더 좋은]아제르바이잔/조지아/아르메니아 3국 13일 #노쇼핑 #바투미</p>
                                <p class="product_explain">담당자가 다녀와서 만든 코카서트 3국 상품, 특급2박, 트빌리시, 예러반 자유</p>
                            </a>
                        </li>
                        <li class="product_list" >
                            <a href="#" title="인기 여행지">
                                <img src="./images/spring_special4.jpg" alt="봄 여행지" loading="lazy">
                                <p class="product_name">[함께 여서 더 좋은]아제르바이잔/조지아/아르메니아 3국 13일 #노쇼핑 #바투미</p>
                                <p class="product_explain">24년 4월 15일! 나고야 직항, 도롯코열차/나고야/시라카와고, 알펜루트 전구간 오픈됩니다.</p>
                            </a>
                        </li>
                        <li>
                            <div class="more">
                                <i class="fa fa-plus"></i>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="korea_travel">
            <h2>우리나라 여행</h2>
            <p class="sub_title"><a href="#" title="인기 여행지 더보기">더보기</a></p>
            <div class="t_list">
                <ul class="list">
                    <li class="product_list">
                        <a href="#" title="인기 여행지">
                            <img src="./images/korea1.jpg" alt="우리나라여행" loading="lazy">
                            <p class="product_name">[노팁노옵션] 이름값하는 한상차림 3일</p>
                            <p class="product_explain">비밀의숲/새별오름/카노푸스(아메리카노1잔제공)/마리나요트</p>
                        </a>
                    </li>
                    <li class="product_list">
                        <a href="#" title="인기 여행지">
                            <img src="./images/korea2.jpg" alt="우리나라여행" loading="lazy">
                            <p class="product_name">[노쇼핑] 오멍가멍 제주 3일</p>
                            <p class="product_explain">노쇼핑으로 진행 되는 제주 3일 여행입니다.</p>
                        </a>
                    </li>
                    <li class="product_list">
                        <a href="#" title="인기 여행지">
                            <img src="./images/korea3.jpg" alt="우리나라여행" loading="lazy">
                            <p class="product_name">[후포항출발/크루즈탑승] 울릉도/관음도 관광호텔급 3일 _여행자보험 포함</p>
                            <p class="product_explain">후포항출발, 크루즈 탑승, 관광호텔급, 여행자보험 포함</p>
                        </a>
                    </li>
                    <li class="product_list">
                        <a href="#" title="인기 여행지">
                            <img src="./images/korea4.jpg" alt="우리나라여행" loading="lazy">
                            <p class="product_name">홍도/흑산도 1박2일</p>
                            <p class="product_explain">섬 전체가 천연기념물 170호, 서해의 붉은섬'홍도'</p>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </main>

    <script src="./script/navi.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        window.addEventListener('DOMContentLoaded', function () {
            const swiper = new Swiper('.mySwiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                centeredSlides: true,
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        });

        let ran_b = Math.floor(Math.random()*2)+1;

        console.log(ran_b);

        const ran_img = document.getElementById('ran_banner')

        ran_img.src = './images/pc_banner'+ ran_b + '.jpg';

        $(document).ready(function(){
            $('ul.tabs li').click(function(){
                var tab_id = $(this).attr('data-tab');

                $('ul.tabs li').removeClass('current');
                $('.tab-content').removeClass('current');

                $(this).addClass('current');
                $("#"+tab_id).addClass('current');
            })
        });
    </script>

<?php include ('footer.php')?>
