<?php

declare(strict_types=1);

namespace NhanAZ\EmojiAttack;

use pocketmine\event\Listener as 👂;
use pocketmine\plugin\PluginBase as 🏠;
use pocketmine\event\server\DataPacketSendEvent as 🛳️;
use pocketmine\network\mcpe\protocol\AvailableCommandsPacket as 📦;
use pocketmine\network\mcpe\protocol\TextPacket as 💬;
use pocketmine\utils\TextFormat as 🌈;

class 🐞 extends 🏠 implements 👂 {

	public const ✈️ = 🌈::ESCAPE . "\u{3000}";

	public const 🛒 = ["ヾ(≧▽≦*)o", "φ(*￣0￣)", "q(≧▽≦q)", "ψ(｀∇´)ψ", "（￣︶￣）↗", "*^____^*", "(～￣▽￣)～", "( •̀ ω •́ )✧", "[]~(￣▽￣)~*", "φ(゜▽゜*)♪", "o(*^＠^*)o", "O(∩_∩)O", "(✿◡‿◡)", "`(*>﹏<*)′", "(*^▽^*)", "（*＾-＾*）", "(❁´◡`❁)", "(≧∇≦)ﾉ", "(´▽`ʃ♡ƪ)", "(●ˇ∀ˇ●)", "○( ＾皿＾)っ Hehehe…", "(￣y▽￣)╭ Ohohoho.....", "\^o^/", "(‾◡◝)", "╰(*°▽°*)╯", "(〃￣︶￣)人(￣︶￣〃)", "o(*^▽^*)┛", "o(*￣▽￣*)ブ", "(^_-)db(-_^)", "o(*￣▽￣*)ブ", "♪(^∇^*)", "(≧∀≦)ゞ", "o(*￣︶￣*)o", "--<-<-<@", "(oﾟvﾟ)ノ", "o(*≧▽≦)ツ┏━┓", "(/≧▽≦)/", "( $ _ $ )", "(☆▽☆)", "ヾ(＠⌒ー⌒＠)ノ", "ㄟ(≧◇≦)ㄏ", "o((>ω< ))o", "( *︾▽︾)", "ヾ(≧ ▽ ≦)ゝ", "☆*: .｡. o(≧▽≦)o .｡.:*☆", "(((o(*ﾟ▽ﾟ*)o)))", "＼(((￣(￣(￣▽￣)￣)￣)))／", "♪(´▽｀)", "( *^-^)ρ(^0^* )", "~~~///(^v^)\\\~~~", "(^///^)", "(p≧w≦q)", "o(*￣▽￣*)o", "( •̀ ω •́ )y", "(o゜▽゜)o☆", "ƪ(˘⌣˘)ʃ"];

	public function onEnable(): void {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function 🚀(🛳️ $🎉): void {
		foreach ( $🎉->getPackets() as $➖ => $✨) {
			if ($✨ instanceof 💬) {
				switch ($✨->type) {
					case 💬::TYPE_POPUP:
					case 💬::TYPE_JUKEBOX_POPUP:
					case 💬::TYPE_TIP:
						break;
					case 💬::TYPE_TRANSLATION:
						$✨->message = $this->🤔($✨->message);
						break;
					default:
						$✨->message .= " " . self::🛒[array_rand(self::🛒)] . self::✈️;
						break;
				}
			} elseif ($✨ instanceof 📦) {
				foreach ($✨->commandData as $📛 => $📅) {
					$📅->description = $this->🤔($📅->description);
				}
			}
		}
	}

	public function 🤔(string $📃): string {
		return preg_replace("/%*(([a-z0-9_]+\.)+[a-z0-9_]+)/i", "%$1", $📃) . " " . self::🛒[array_rand(self::🛒)] . self::✈️;
	}
}
