<?php

/**
 * Class Miyasan
 */
class Miyasan extends Hello_Kushimoto_Random_Speaker {

	/**
	 * @var string NickName
	 */
	protected $name = 'mr-m';

	/**
	 * apply original filter whoami method
	 * @return string
	 */
	public function whoami() {
		return (string) apply_filters( 'miyasan_name', parent::whoami() );
	}


	/**
	 * apply original filter say method.
	 * @return String
	 */
	public function say() {
		return (string) apply_filters( 'miyasan_say', parent::say() );
	}

	/**
	 * Dictionary of Mr.M's Quotations.
	 * @return String[]
	 */
	public function get_words() {
		return array(
			'台風中継でおなじみの和歌山県串本町から来ました。',
			'お客さんから不吉なメールが来た。見なかったことにしよう。。。',
			'めんどくさい案件を全部断って楽な案件だけを求め続けてたらいつのまにか串本に住んでました。',
			'え？まだMAMPで消耗してるの？',
			'え？まだこれからもMAMPで消耗してるの？',
			'Windowsはガン無視です 笑',
			'sudoならインストールできた？ だめですよそんなのずっとsudoですることになりますよ？',
			'sudoなんて邪道ですよ。そんなもんできたことになりません。',
			'あのねみなさんね ブログに書いてあるコマンドとか実行しちゃうでしょ あれ大体間違ってますよ',
			'みなさん自分が苦労したこと記事に書きたくなるでしょ？ 苦労したって事はそれはどっか間違ってんですよ',
			'CMSのコアのソースを読むとか時間の無駄',
			'お見積依頼ですか？',
			'それプルリクください',
			'プルリクお待ちしてます!',
			'なぜそうなるかわかりますか？',
			'整理できていない知識はないのと同じですよ',
			'とりあえず何か公開しろ。話はそれからじゃっ！',
			'オープンソースっぽくない奴はほんとダメ',
			'すげー、熱烈に握手をもとめられたのでどうしたのかと思ったら、Contact Form 7の作者とまたもや間違えられました',
			'高速が開通したんだって！大阪まで３時間切るかも！',
			'つくるのはなんでも作りますｗ（岡本さんがｗ',
			'仕事や！ 行ってこい！',
			'まじに楽しいのになー。自分が使いたい物を大っぴらに作って放置しとくだけで世界がどれだけ広がるか。',
			'自慢じゃないですが、1日で作りました。（自慢ですけど）',
			'え？そんなんできたうちに入りませんよ。rootに変わるなんてうんこです。',
			'MAMPなんてアンインストールしちゃえばいいんですよ。',
			'世界は変化してるんです。半年前はそんなのありませんでした。',
			'すぐにsudoしたら？って言うエンジニアは信用しちゃいけません。',
			'串本の海？台風の後に犬の散歩してると、サメが打ち上げられたりしてますね。',
			'I\'m fake Takayuki',
			'DMで質問をいただいても回答できないので、GitHubのIssueに書いていただけると助かります。', 
			'FTPなんてまだあるのか。。。',
			'プルリクエストありがとうございます！',
		);
	}
}
