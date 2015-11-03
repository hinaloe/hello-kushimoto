<?php

/**
 * Class Miyasan
 */
class Miyasan implements Hello_Kushimoto_Speaker {

	/**
	 * Miyasan say
	 * @return mixed
	 */
	public function say() {
		$words = $this->getWords();

		return $words[ array_rand( $words ) ];
	}

	/**
	 * Dictionary of Mr.M's Quotations.
	 * @return array
	 */
	public function getWords() {
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
			'なぜそうなるかわかりますか？',
			'整理できていない知識はないのと同じですよ',
			'とりあえず何か公開しろ。話はそれからじゃっ！',
			'オープンソースっぽくない奴はほんとダメ',
			'すげー、熱烈に握手をもとめられたのでどうしたのかと思ったら、Contact Form 7の作者とまたもや間違えられました',
			'高速が開通したんだって！大阪まで３時間切るかも！',
			'つくるのはなんでも作りますｗ（岡本さんがｗ',
		);
	}
}