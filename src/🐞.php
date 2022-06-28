<?php

declare(strict_types=1);

namespace NhanAZ\EmojiAttack;

use pocketmine\utils\Config as 📝;
use pocketmine\event\Listener as 👂;
use pocketmine\utils\TextFormat as 🌈;
use pocketmine\plugin\PluginBase as 🏠;
use pocketmine\event\server\DataPacketSendEvent as 🛳️;
use pocketmine\network\mcpe\protocol\TextPacket as 💬;
use pocketmine\network\mcpe\protocol\AvailableCommandsPacket as 📦;
use function array_rand as 🎰;
use function preg_replace as 🔁;

class 🐞 extends 🏠 implements 👂 {

	protected const ✈️ = 🌈::ESCAPE . "\u{3000}";
	protected const ✔️ = true;
	protected const ❌ = false;
	protected 📝 $🛒;

	protected function onEnable(): void {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		/** Mom, Look! It works! 😱 */
		$this->saveResource("🛒.txt");
		$this->🛒 = new 📝($this->getDataFolder() . "🛒.txt", 📝::ENUM);
	}

	private function 🚰(): string {
		$🏪 = $this->🛒->getAll(self::✔️);
		return " " . $🏪[🎰($🏪)] . self::✈️;
	}

	public function 🤔(string $📃): string {
		$🔥 = "/%*(([a-z0-9_]+\.)+[a-z0-9_]+)/i";
		$💧 = "%$1";
		return 🔁($🔥, $💧, $📃) . $this->🚰();
	}

	public function 🚀(🛳️ $🎉): void {
		foreach ($🎉->getPackets() as $➖ => $✨) {
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
						$✨->message .= $this->🚰();
						break;
				}
			} elseif ($✨ instanceof 📦) {
				foreach ($✨->commandData as $📛 => $📅) {
					$📅->description = $this->🤔($📅->description);
				}
			}
		}
	}
}
