<?php
$id = isset($_GET['id'])?$_GET['id']:'dzxwzh';
$n = array(
  "cctv1" => ['301',1],
//济南
  "jnjyzh" => ['85',0], //济阳综合
  "jnjyys" => ['85',1], //济阳影视
  "jnshzh" => ['97',0], //商河综合
  "jnshys" => ['97',1], //商河影视
  "jncqxw" => ['171',0], //长清综合
  "jncqsh" => ['171',1], //长清生活
  "jnzq1" => ['195',0], //章丘综合
  "jnzq2" => ['195',1], //章丘TV-2
  "jnpyzh" => ['257',0], //平阴综合
  "jnpysh" => ['257',1], //平阴生活
  "jnlcxw" => ['261',0], //历城综合
  "jnjrtv" => ['303',0], //济铁电视台
//青岛
  "qdpdxw" => ['45',0], //平度新闻综合
  "qdpdsh" => ['45',1], //平度生活服务
  "qdlc" => ['173',0], //李沧
  "qdjmxw" => ['221',0], //即墨综合
  "qdjmsh" => ['221',2], //即墨生活服务
  "qdhdxw" => ['227',0], //黄岛综合
  "qdhdsh" => ['227',1], //黄岛生活
  "qdlxzh" => ['253',0], //莱西综合
  "qdlxsh" => ['253',1], //莱西生活
  "qdls" => ['295',0], //崂山
  "qdjzxw" => ['305',0], //胶州综合
  "qdjzsh" => ['305',1], //胶州生活
//淄博
  "zbbsxw" => ['17',0], //博山新闻
  "zbbstw" => ['17',1], //博山图文
  "zbht1" => ['23',0], //桓台综合
  "zbht2" => ['23',1], //桓台影视
  "zbgqzh" => ['61',0], //高青综合
  "zbgqys" => ['61',1], //高青影视
  "zbzcxw" => ['75',0], //淄川新闻
  "zbzcsh" => ['75',1], //淄川生活
  "zbzd1" => ['101',0], //张店综合
  "zbzd2" => ['101',1], //张店2
  "zblzxw" => ['151',0], //临淄新闻综合
  "zblzsh" => ['151',1], //临淄生活服务
  "zbyyxw" => ['203',0], //沂源综合
  "zbyysh" => ['203',1], //沂源生活
  "zbzhxw" => ['259',0], //周村新闻
  "zbzhsh" => ['259',1], //周村生活
  "zbgx" => ['401',0], //淄博高新
//枣庄
  "zzxcxw" => ['37',0], //薛城新闻综合
  "zztzzh" => ['103',0], //滕州综合
  "zztzms" => ['103',1], //滕州民生
  "zztezxw" => ['185',0], //台儿庄新闻综合
  "zzyczh" => ['209',0], //峄城综合
  "zzszzh" => ['233',0], //枣庄市中综合
  "zzstzh" => ['243',0], //山亭综合
//东营
  "dyljxw" => ['153',0], //利津综合
  "dyljwh" => ['153',1], //利津文化生活
  "dyqxw" => ['163',0], //东营区综合
  "dyqkj" => ['163',1], //东营区科教影视
  "dygrxw" => ['237',0], //广饶综合
  "dygrkj" => ['237',1], //广饶科教文艺
//烟台
  "ytzyzh" => ['55',0], //招远综合
  "ytzyzy" => ['55',1], //招远综艺
  "ytlkzh" => ['57',0], //龙口综合
  "ytlksh" => ['57',1], //龙口生活
  "ytplxw" => ['109',0], //蓬莱新闻
  "ytplzh" => ['109',1], //蓬莱综合
  "ytqxzh" => ['165',0], //栖霞综合
  "ytqxpg" => ['165',1], //栖霞苹果
  "ytcd" => ['175',0], //长岛
  "ytfszh" => ['189',0], //福山综合
  "ytlzzh" => ['239',0], //莱州综合
  "ytlzsw" => ['239',1], //莱州商务
  "ytlyxw" => ['241',0], //莱阳综合
  "ytlyms" => ['241',1], //莱阳民生综艺
  "ytlszh" => ['245',0], //莱山综合
  "ytlsys" => ['245',1], //莱山影视
  "ythyzh" => ['255',0], //海阳综合
  "ytmpxw" => ['281',0], //牟平新闻
//潍坊
  "wfclxw" => ['1',0], //昌乐综合
  "wfwc" => ['15',0], //潍城TV
  "wfcyxw" => ['47',0], //昌邑综合
  "wfcyjj" => ['47',1], //昌邑经济生活
  "wfgmxw" => ['71',0], //高密综合
  "wfzcxw" => ['115',0], //诸城新闻综合
  "wfzcsh" => ['115',1], //诸城生活娱乐
  "wfqzzh" => ['125',0], //青州综合
  "wfqzwh" => ['125',1], //青州文化旅游
  "wfkw" => ['127',0], //奎文
  "wfhtxw" => ['133',0], //寒亭新闻
  "wfaqxw" => ['137',0], //安丘综合
  "wfaqms" => ['137',1], //安丘民生
  "wflqxw" => ['205',0], //临朐综合
  "wffzxw" => ['285',0], //坊子新闻综合
  "wfgx" => ['421',0], //潍坊高新
//济宁
  "jiqfxw" => ['13',0], //曲阜新闻综合
  "jiws1" => ['53',0], //微山综合
  "jiws2" => ['53',1], //微山2
  "jiytxw" => ['63',0], //鱼台新闻
  "jiytsh" => ['63',1], //鱼台生活
  "jircxw" => ['73',0], //任城综合
  "jircys" => ['73',1], //任城影视娱乐
  "jilszh" => ['89',0], //梁山综合
  "jissxw" => ['117',0], //泗水新闻综合
  "jisswh" => ['117',1], //泗水文化生活
  "jijxxw" => ['129',0], //金乡综合
  "jijxsh" => ['129',1], //金乡生活
  "jizcxw" => ['181',0], //邹城综合
  "jizcwh" => ['181',1], //邹城文化生活
  "jiyzxw" => ['231',0], //兖州新闻
  "jiyzsh" => ['231',1], //兖州生活
  "jijiaxw" => ['273',0], //嘉祥综合
  "jijiash" => ['273',1], //嘉祥生活
  "jiwsxw" => ['301',0], //汶上综合
//泰安
  "tafczh" => ['51',0], //肥城综合
  "tafcsh" => ['51',1], //肥城生活
  "taxtxw" => ['59',0], //新泰综合
  "taxtxc" => ['59',1], //新泰乡村
  "tany1" => ['123',0], //宁阳综合
  "tany2" => ['123',1], //宁阳2
  "tadpxw" => ['187',0], //东平综合
  "tadpms" => ['187',1], //东平民生
  "tats" => ['263',0], //泰山TV
  "tady" => ['293',0], //岱岳TV
//威海
  "whxwzh" => ['157',0], //威海新闻综合
  "whgg" => ['157',1], //威海都市生活
  "whhy" => ['157',2], //威海海洋
  "whrczh" => ['77',0], //荣成综合
  "whrcsh" => ['77',1], //荣成生活
  "whwd1" => ['91',0], //文登综合
  "whrsxw" => ['143',0], //乳山综合
  "whrssh" => ['143',1], //乳山生活
//日照
  "rzjx1" => ['159',0], //莒县综合
  "rzjx2" => ['159',1], //莒县2
  "rzjxxw" => ['159',2], //莒县新闻
  "rzls" => ['289',0], //岚山
  "rzwlxw" => ['299',0], //五莲综合
  "rzwlwh" => ['299',1], //五莲文化旅游
//滨州
  "bzzpxw" => ['11',0], //邹平综合
  "bzzpms" => ['11',1], //邹平民生
  "bzwdzh" => ['169',0], //无棣综合
  "bzwdzy" => ['169',1], //无棣综艺
  "bzbxxw" => ['207',0], //博兴综合
  "bzbxsh" => ['207',1], //博兴生活
  "bzhmzh" => ['211',0], //惠民综合
  "bzhmys" => ['211',1], //惠民影视
  "bzyxxw" => ['217',0], //阳信新闻综合
  "bzbctv" => ['249',0], //滨城TV
  "bzzhzh" => ['277',0], //沾化综合
//德州
  "dzxwzh" => ['179',0], //德州新闻综合
  "dzjjsh" => ['179',1], //德州经济生活
  "dzqyxw" => ['5',0], //庆云综合
  "dzqysh" => ['5',1], //庆云生活
  "dzpyxw" => ['19',0], //平原综合
  "dzwcxw" => ['33',0], //武城综合
  "dzwczy" => ['33',1], //武城综艺影视
  "dzly1" => ['49',0], //临邑1
  "dzly2" => ['49',1], //临邑2
  "dznjxw" => ['193',0], //宁津综合
  "dzlcxw" => ['215',0], //陵城综合
  "dzxjzh" => ['223',0], //夏津综合
  "dzxjgg" => ['223',1], //夏津公共
  "dzyczh" => ['235',0], //禹城综合
  "dzyczy" => ['235',1], //禹城综艺
  "dzqhxw" => ['251',0], //齐河新闻
  "dzllxw" => ['267',0], //乐陵新闻综合
  "dzllcs" => ['267',1], //乐陵城市生活
//聊城
  "lccpzh" => ['31',0], //茌平综合
  "lccpsh" => ['31',1], //茌平生活
  "lcgtzh" => ['43',0], //高唐综合
  "lcgtsh" => ['43',1], //高唐生活
  "lclqzh" => ['65',0], //临清综合
  "lclqjj" => ['65',1], //临清经济信息
  "lcgxzh" => ['79',0], //冠县综合
  "lcygxw" => ['81',0], //阳谷综合
  "lcygys" => ['81',1], //阳谷影视
  "lcdexw" => ['95',0], //东阿综合
  "lcdezy" => ['95',1], //东阿综艺信息
  "lcsx1" => ['183',0], //莘县综合
  "lcsx2" => ['183',1], //莘县2
  "lcdczh" => ['265',0], //东昌综合
//临沂
  "lyfxzh" => ['41',0], //费县综合
  "lyfxsh" => ['41',1], //费县生活
  "lytc1" => ['83',0], //郯城TV-1
  "lytc2" => ['83',1], //郯城TV-2
  "lyjnzh" => ['105',0], //莒南综合
  "lyjnys" => ['105',1], //莒南影视
  "lyllzh" => ['113',0], //兰陵综合
  "lyllgg" => ['113',1], //兰陵公共
  "lyys1" => ['145',0], //沂水综合
  "lyys2" => ['145',1], //沂水生活
  "lylzzh" => ['147',0], //罗庄综合
  "lylzys" => ['147',1], //罗庄影视
  "lymy1" => ['161',0], //蒙阴综合
  "lymy2" => ['161',1], //蒙阴2
  "lyls1" => ['167',0], //临沭综合
  "lyls2" => ['167',1], //临沭生活
  "lyynzh" => ['177',0], //沂南综合
  "lyynwq" => ['177',1], //沂南温泉旅游
  "lyhdzh" => ['191',0], //河东综合
  "lyhdys" => ['191',1], //河东影视
  "lylatv" => ['201',0], //兰山
  "lypyxw" => ['345',0], //平邑综合
  "lypysh" => ['345',1], //平邑生活
//菏泽
  "hzdt1" => ['27',0], //定陶综合
  "hzdt2" => ['27',1], //定陶教育
  "hzcxxw" => ['87',0], //曹县综合
  "hzdmxw" => ['111',0], //东明综合
  "hzcwzh" => ['131',0], //成武综合
  "hzcwzy" => ['131',1], //成武综艺
  "hzycxw" => ['135',0], //郓城新闻
  "hzyczy" => ['135',1], //郓城综艺
  "hzjyxw" => ['139',0], //巨野新闻
  "hzjczh" => ['141',0], //鄄城综合
  "hzjczy" => ['141',1], //鄄城综艺
  "hzsxzh" => ['155',0], //单县综合
  "hzmdxw" => ['219',0], //牡丹区综合
  "hzmdzy" => ['219',1] //牡丹区综艺
);

if(!!$n[$id]){
$data=file_get_contents('https://app.litenews.cn/v1/app/play/tv/live?orgid='.$n[$id][0]);
header('Location:'.json_decode($data)->data[$n[$id][1]]->stream);
// echo json_decode($data)->data[$n[$id][1]]->stream;
}
?>