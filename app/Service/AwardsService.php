<?php 

    namespace App\Service;

    use App\Contracts\AwardsInterface;
    use App\Repository\AwardsInRepository;
    use Illuminate\Support\Facades\Auth;

    class AwardsService implements AwardsInterface
    {
        protected $awardsInRepository;
        public function __construct(AwardsInRepository $awardsInRepository)
        {
            $this->awardsInRepository = $awardsInRepository;
        }

        /**
         * Adicionar nova premiação
         * @param mixed $prizeInformation
         * @return \Illuminate\Http\JsonResponse
         */
        public function registerPrize($prizeInformation)
        {
           
            try {
               
                $path = $prizeInformation->file('file_path')->store('images', 'public');

                $dateTimePrize = $prizeInformation->dateTime == "NULL" ? NULL : $prizeInformation->dateTime;

                $this->awardsInRepository->createAward([
                    "file_path"                     => $path,
                    "descriptionAward"              => $prizeInformation->descriptionAward,
                    "prizeValue"                    => $prizeInformation->prizeValue,
                    "dateTime"                      => $dateTimePrize,
                    "valueNumberPrize"              => $prizeInformation->valueNumberPrize,
                    "freeOrPaid"                    => $prizeInformation->freeOrPaid,
                    "prizeOrCard"                   => $prizeInformation->prizeOrCard,
                    "reservationPaymentDeadline"    => $prizeInformation->reservationPaymentDeadline,
                ]);

                return response()->json(['response' => true, 
                                                'message' => 'Premiação cadastrado com sucesso']
                                        )->setEncodingOptions(JSON_UNESCAPED_UNICODE);

            } catch (\Throwable $th) {

                return response()->json(['response' => false, 
                                                'message' => 'Erro ao cadastrar a Premiação']
                                        )->setEncodingOptions(JSON_UNESCAPED_UNICODE);
            }
            
        }

        /**
         * 
         * @param mixed $updatePrizeInformation
         * @return \Illuminate\Http\JsonResponse
         * 
         * Atualizar algumas informações do premio! ex: descrição, valor do premio, data e hora do sorteio, o numero sorteado, alterar o status do premio
         */
        public function updatePrize($updatePrizeInformation)
        {
            try {
               
                $dateTimePrize = $updatePrizeInformation->dateTime == "NULL" ? NULL : $updatePrizeInformation->dateTime;

                $this->awardsInRepository->updateAward([
                    "descriptionAward" => $updatePrizeInformation->descriptionAward,
                    "prizeValue"       => $updatePrizeInformation->prizeValue,
                    "dateTime"         => $dateTimePrize,
                    "drawnNumber"      => $updatePrizeInformation->drawnNumber,
                    "active"           => $updatePrizeInformation->active,
                ], $updatePrizeInformation->id);

                return response()->json(['response' => true, 
                                                'message' => 'Premiação atualizada com sucesso']
                                        )->setEncodingOptions(JSON_UNESCAPED_UNICODE);

            } catch (\Throwable $th) {

                return response()->json(['response' => false, 
                                                'message' => 'Erro ao atualizar a Premiação']
                                        )->setEncodingOptions(JSON_UNESCAPED_UNICODE);
            }
        }
    }