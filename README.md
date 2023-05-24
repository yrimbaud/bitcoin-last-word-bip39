# PHP BIP39 Last Word Calculation

## Presentation

This project is an implementation in PHP specifically designed to calculate the last word of a BIP39 mnemonic phrase.

BIP39, which stands for Bitcoin Improvement Proposal 39, establishes a system of mnemonic codes or phrases made up of words that can be used to generate deterministic wallets. Essentially, these mnemonic phrases are human-friendly representations of the keys used in blockchain technologies.

A BIP39 phrase consists of a sequence of words, the last of which serves as a checksum for all the preceding ones. This checksum word ensures the integrity of the mnemonic, making it crucial in the process of key generation. This tool's primary function is to correctly derive this last word given the other words in the mnemonic phrase.

As such, bip39-last-word can be particularly valuable to developers and crypto enthusiasts involved with cryptocurrency wallets, blockchain development, or any related technology that employs BIP39. It can help ensure the correctness of mnemonic phrases and by extension, enhance the security of the deterministic wallets they represent.

## Features

- Quickly generate the last word of a BIP39 mnemonic phrase.
- PHP implementation for easy integration with existing PHP projects.

## How to Use

1. Clone this repository: `git clone https://github.com/yrimbaud/bip39-last-word.git`
2. Navigate to the repository folder: `cd bip39-last-word`
3. Open the file `script.php`, locate the placeholder for the seed and replace it with your own 23-word BIP39 mnemonic phrase
4. Run the desired script with PHP: `php script.php`

Be cautious when handling your mnemonic phrase as it can be used to access your wallet.

## Security Considerations

The security of your mnemonic phrase and wallet is in your hands.

Always exercise caution and follow best security practices:
- Use this tool offline to prevent potential exposure of your mnemonic phrase over the internet: it will significantly reduce the risk of your mnemonic phrase being intercepted or stolen.
- Anyone with access to your mnemonic phrase could potentially access your wallet and your funds: avoid storing them in unsecured locations or transmitting them over unsecured channels.
- Ensure that the system you are using to run the script is secure: it should be updated and free of malware or any potential security threats.

## Troubleshooting

If you encounter issues while using this project, please check the following:
- Make sure you have PHP installed and properly configured on your system.
- Ensure that the scripts have the necessary permissions to execute.
- Verify that the input to the script meets the requirements of a BIP39 mnemonic phrase (excluding the last word).

If the issue persists, please open an issue on GitHub.

## Author

This project is maintained by Yann Rimbaud ([yrimbaud](https://github.com/yrimbaud)).

## Licence

This project is licensed under the MIT License.
