<?php
	class Pinpad extends IPSModule
	{

		public function Create()
		{
			//Never delete this line!
			parent::Create();

			$this->RegisterVariable();

			$this->SetVisualizationType(1);
		}

		public function Destroy()
		{
			//Never delete this line!
			parent::Destroy();
		}

		public function ApplyChanges()
		{
			//Never delete this line!
			parent::ApplyChanges();

			//$this->UpdateVisualizationValue();
		}

		public function RequestAction($Ident, $value)
		{
			if ($this->GetIDForIdent($Ident))
			{
				            $this->SendDebug('Error in RequestAction', 'Variable to be updated does not exist'.$value, 0);
							$this->SetValue($Ident, $value);

			}
		}
		private function RegisterVariable()
		{
			$this->RegisterVariableString('PinID', $this->Translate('Pin'),'',0);

		}

		public function GetVisualizationTile()
		{
			       // Füge ein Skript hinzu, um beim Laden, analog zu Änderungen bei Laufzeit, die Werte zu setzen

				   // Füge statisches HTML aus Datei hinzu
				   $module = file_get_contents(__DIR__ . '/module.html');
		   
				   // Gebe alles zurück.
				   // Wichtig: $initialHandling nach hinten, da die Funktion handleMessage erst im HTML definiert wird
				   return $module;
		}
		
	}